<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WelcomeController extends Controller
{
public function hello() {
 return "Hello World";
}
public function index() {
    return "Selamat Datang";
   }
   public function about() {
    return 'Muhammad latif bima, 2241760047';
   }
   public function articles($Id) {
    return 'Halaman Ke'.$Id;
   }
   public function greeting(){
    return view('blog.hello')
    ->with('name','bima')
    ->with('occupation','Astronaut');
    }
}
