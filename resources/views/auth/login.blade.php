 <!-- Modal -->
 <form method="POST" action="{{ route('login') }}">
     @csrf
     <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header tit-up">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h4 class="modal-title">Login Admin</h4>
                 </div>
                 <div class="modal-body customer-box">
                     <div class="tab-content">
                         <div class="tab-pane active" id="Login">
                             <form role="form" class="form-horizontal">
                                 <div class="form-group">
                                     <div class="col-sm-12">
                                         <input class="form-control @error('email') is-invalid @enderror" name="email"
                                             id="email" placeholder="Masukkan Email Anda" type="email">
                                         @error('email')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>Maaf Email yang Anda Masukkan Salah.</strong>
                                             </span>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <div class="col-sm-12">
                                         <input class="form-control @error('password') is-invalid @enderror"
                                             name="password" id="password" placeholder="Masukkan Password Anda"
                                             type="password">
                                         @error('password')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>Maaf Password yang Anda Masukkan Salah.</strong>
                                             </span>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-sm-10">
                                         <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                                             Submit
                                         </button>
                                         @if (Route::has('password.request'))
                                             <a href="{{ route('password.request') }}" style="font-size: 16px" >
                                                 {{ __('Lupa Kata Sandi?') }}
                                             </a>
                                         @endif
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </form>
