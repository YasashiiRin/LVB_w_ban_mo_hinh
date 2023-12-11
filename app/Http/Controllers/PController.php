<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\User;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;
use Session;
use Hash;
use Auth;
use Image;

class PController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $newpd = Product::where('typeB', 1)->paginate(4);
        $toppd = Product::where('typeB', 11)->paginate(4, ['*'], 'pag=top');
        $gocpd = Product::where('typeB', 0)->paginate(4, ['*'], 'pag=goc');
        $khuyenmai = Product::where('promotion_price', '<>', 0)->paginate(8, ['*'], 'pag=km');
        return view('page.trangchu', compact('slide', 'newpd', 'khuyenmai', 'toppd', 'gocpd'));
    }
    public function getLoaiSP($type)
    {
        $sp_theoloai = Product::where('id_type', $type)->paginate(3);
        $sp_khac = Product::where('id_type', '<>', $type)->paginate(3, ['*'], 'pag=sp_khac');
        $loai = ProductType::all();
        $loai_sp = ProductType::where('id', $type)->first();
        return view('page.loaisanpham', compact('sp_theoloai', 'sp_khac', 'loai', 'loai_sp'));
    }
    public function getLogin()
    {
        return view('page.Pagelog');
    }

    public function getPL()
    {
        return view('page.PageLog');
    }

    public function getSigup()
    {
        return view('page.dangky');
    }

    public function getLienHe()
    {
        return view('page.lienhe');
    }
    public function getGioiThieu()
    {
        return view('page.gioithieu');
    }
    public function getadduser()
    {
        return view('page.addUser');
    }
    public function postLogin(Request $req)
    {
        $credentials = array('email' => $req->email, 'password' => $req->password);
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin');
        }else if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('trang-chu');
        }else{
            return redirect()->back()->with(['flag' => 'danger', 'message' => 'đăng nhập không thành công']);
        }
    }
    public function gethome()
    {
        return redirect()->route('trang-chu');
    }
    public function getlogout()
    {
        Auth::logout();
        return view('page.PageLog');
    }
    public function getsearch(Request $req)
    {
        $prd = Product::where('name', 'like', '%' . $req->key . '%')
            ->orWhere('unit_price', $req->key)->get();

        return view('page.search', compact('prd'));
    }
    public function postSigup(Request $req)
    {
        $this->validate(
            $req,
            [
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:20',
                'fullname' => 'required',
                'phone' => 'required|min:11|max:11',
                're_password' => 'required|same:password'
            ],
            [
                'email.required' => 'vui lòng nhập email',
                'email.email' => 'không đúng dịnh dạng email',
                'email.unique' => 'email đã có người sử dụng',
                'password.required' => 'Vui lòng nhập mật khẩu',
                'ngaysinh.required' => 'vui lòng nhập ngày sinh của bạn theo định dạng 0000/00/00',
                're_password.same' => 'Mật khẩu không khớp',
                'password.min' => 'mật khẩu ít nhất 6 ký tự '
            ]
        );
        $user = new User();
        $user->full_name = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->ngaysinh = $req->ngaysinh;
        $user->save();
        return redirect()->back()->with('thanhcong', 'tạo tài khoản thành công');
    }
    //==========================admin user=========================
    public function getuserManagement(){
        $get_list_user= User::all();
        return view('Manager.userManagement',compact('get_list_user'));
    }
    public function getproductManagement(){
        $get_list_product= Product::all();
        return view('Manager.productManagement',compact('get_list_product'));
    }
    public function getadmin(){
        return view('Manager.admin');
    }
    public function postaddUser(Request $req){
        $user=User::create([
           'full_name' => $req->input('fullname'),
           'email' => $req->input('email'),
           'password' => $req->input('password'),
           'phone' => $req->input('phone'),
           'address' => $req->input('address'),
           'Ngaysinh'=>$req->input('ngaysinh'),
           
        ]);
        return redirect()->route('userManagement');
   }
   public function getupdateUser($id)
   {
       $listuser = User::find($id);
       return view('page.updateUser', compact('listuser'));
   }
    public function postupdateUser(Request $req){
       $idd=$req->id;
       User::where('id',$idd)->update([
        'full_name' => $req->input('fullname'),
        'email' => $req->input('email'),
        'password' =>  bcrypt($req->input('password')),
        'phone' => $req->input('phone'),
        'address' => $req->input('address'),
        'Ngaysinh'=>$req->input('ngaysinh'),
       ]);
       return redirect()->route('userManagement');
   }
   public function DeleteUser($id){
       User::where('id',$id)->delete();
       return redirect()->back()->with('thanhcong','Xóa người dùng thành công');
   }
   //===================================================================


    //==========================admin product=========================
    public function getaddproduct(){
        return view('page.addProduct');
    }
    public function postaddproduct(Request $req){
        $product=Product::create([
            'name' => $req->input('name'),
            'id_type' => $req->input('id_type'),
            'description' => $req->input('description'),
            'unit_price' => $req->input('unit_price'),
            'promotion_price' => $req->input('promotion_price'),
            'image'=>$req->input('image'),
            'typeB'=>$req->input('typeB'),         
         ]);
         return redirect()->route('productManagement');
   }
   public function getupdateproduct($id)
   {
    $listpd = Product::find($id);
    return view('page.updateProduct', compact('listpd'));
   }
    public function postupdateProduct(Request $req){
       $idpd=$req->id;
       $record= Product::find($idpd);
       $currentImage = $record->image;
       if ($req->input('image')!==null) {
        // $image = $req->file('image');
        // $imageName = $image->getClientOriginalName();
        // $imagePath = $image->storeAs('public/imagee', $imageName);
        
        // Storage::delete($currentImage);
        $record->name= $req->input('name');
        $record->id_type= $req->input('id_type');
        $record->description= $req->input('description');
        $record->unit_price= $req->input('unit_price');
        $record->promotion_price= $req->input('promotion_price');
        $record->image=$req->input('image');
        $record->typeB= $req->input('typeB');  
        $record->update();
        
    }else{
        $record->name= $req->input('name');
        $record->id_type= $req->input('id_type');
        $record->description= $req->input('description');
        $record->unit_price= $req->input('unit_price');
        $record->promotion_price= $req->input('promotion_price');
        $record->typeB= $req->input('typeB');  
        $record->update();
    }
    //    Product::where('id',$idpd)->update([
    //     'name' => $req->input('name'),
    //     'id_type' => $req->input('id_type'),
    //     'description' => $req->input('description'),
    //     'unit_price' => $req->input('unit_price'),
    //     'promotion_price' => $req->input('promotion_price'),
    //     'image'=>$req->input('image'),
    //     'typeB'=>$req->input('typeB'),   
    //    ]);
       return redirect()->route('productManagement');
   }
   public function getdeleteProduct($id){
       Product::where('id',$id)->delete();
       return redirect()->back()->with('thanhcong','Xóa người dùng thành công');
   }
   //==========================Order================================
   public function getmanagementOder(){
    $get_list_order= Bill::all();
    $get_list_billdetails= BillDetail::all();
    $get_list_customer=Customer::all();
    return view('Manager.orderManagement',compact('get_list_order','get_list_billdetails','get_list_customer'));
   }
   public function getaddOrder(){
        return view('page.addOrder');
   }
   public function postaddOrder(Request $req){
        $customer=new Customer;
        $customer->name= $req->input('name');
        $customer->gender= $req->input('gender');
        $customer->email = $req->input('email');
        $customer->address= $req->input('address');
        $customer->phone_number = $req->input('phone_number');
        $customer->note=$req->input('note');
        $customer->save();       
  
     $bill = new Bill;
     $bill->id_customer=$customer->id;
     $bill->date_order=date('Y-m-d');
     
     $bill->total=$req->input('total');
     $bill->payment=$req->input('payment');
     $bill->note=$customer->note;
     $bill->save();

     $bill_detail=new BillDetail;
     $bill_detail->id_bill=$bill->id;
     $bill_detail->id_product=$req->input('id_product');
     $bill_detail->quantity=$req->input('quantity');
     $bill_detail->unit_price=$req->input('unit_price');
     $bill_detail->save();
   }
   public function getupdateOrder($id){
        $get_list_cus=Customer::find($id);
        $get_list_bill=Bill::where('id_customer',$id)->first();
        return view('page.updateOrder',compact('get_list_cus','get_list_bill'));
   }
   public function postupdateOrder(Request $req){
    $id=$req->id;
    $id_bill=$req->idbill;
        Customer::where('id',$id)->update([
            'name'=>$req->input('name'),
            'gender'=>$req->input('gender'),
            'email'=>$req->input('email'),
            'address'=>$req->input('address'),
            'phone_number'=>$req->input('phone_number'),
            'note'=>$req->input('note'),
        ]);
        Bill::where('id',$id_bill)->update([
            'State'=>$req->input('State'),
            'note'=>$req->input('note'),
        ]);
        return redirect()->route('managementOder');

   }
   public function getdeleteOrder($id){
    $billtime=Bill::find($id);
    Customer::where('id',$billtime->id_customer)->delete();
    BillDetail::where('id_bill',$id)->delete();
    Bill::where('id',$id)->delete();
    return redirect()->back();
   }
   public function getchangeStateOrder($id){
        $ord=Bill::find($id);
        $ord->State='confirmed';
        $ord->update();
        return redirect()->back();

   }
   //===============================================================

    public function getaddcart(Request $req, $id)
    {
        $product = Product::find($id);
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->Session()->put('cart', $cart);
        return redirect()->back();
    }

    public function getdeletecart($id)
    {
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->back();
    }
    //===============dat hang ======================
    public function getdathang(){
        if(Session::has('cart')){
                $oldCart= Session::get('cart');
                $cart= new Cart($oldCart);
                return view('page.dat_hang',['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
            return view('page.dat_hang');
   }
   public function postdathang(Request $ii){
    $cart=Session::get('cart');
    $customer=new Customer;
    $customer->name=$ii->name;
    $customer->gender=$ii->gender;
    $customer->email=$ii->email;
    $customer->address=$ii->address;
    $customer->phone_number=$ii->phone;
    $customer->note=$ii->notes;
    $customer->save();

    $bill = new Bill;
    $bill->id_customer=$customer->id;
    $bill->date_order=date('Y-m-d');
    
    $bill->total=$cart->totalPrice;
    $bill->payment=$ii->payment_method;
    $bill->note=$ii->notes;
    $bill->save();
    
    foreach ($cart->items as $key => $value) {
        $bill_detail=new BillDetail;
        $bill_detail->id_bill=$bill->id;
        $bill_detail->id_product=$key;
        $bill_detail->quantity=$value['qty'];
        $bill_detail->unit_price=$value['price']/$value['qty'];
        $bill_detail->save();
    }
    Session::forget('cart');
    return redirect()->back()->with('thongbao','đặt hàng thành công');
    
}
public function getprofile(){
    return view('page.Profile');
}
public function getaboutus(){
    return view('page.AboutUs');
}
public function getcontacs(){
    return view('page.Contac');
}
}
