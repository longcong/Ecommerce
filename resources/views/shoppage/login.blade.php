<div class="modal-dialog">
    <div class="modal-content c-square">
        <div class="modal-header c-no-border">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <h3 class="c-font-24 c-font-sbold">Đăng Nhập</h3>
            <p>Chúc bạn một ngày tốt lành !</p>
            <form  method="POST" action="{{ route('login') }}">
            @csrf

                <div class="form-group row">
                    <label for="username" class="hide">Tên tài khoản:</label>
                    <div class="col-md-12">
                        <input id="username" type="text" class="form-control input-lg  @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="hide">{{ __('mật khẩu:') }}</label>
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control input-lg  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                <div class="form-group">

                    <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">
                        đăng nhập
                    </button>
                    <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">
                        quên mật khẩu ?
                    </a>

                </div>
                <div class="clearfix">
                    <div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">
                        <span>đăng nhập bằng</span>
                    </div>
                    <ul class="c-content-list-adjusted">
                        <li>
                            <a class="btn btn-block c-btn-square btn-social btn-twitter">
                              <i class="fa fa-twitter"></i>
                              Twitter
                            </a>
                        </li>
                        <li>
                            <a class="btn btn-block c-btn-square btn-social btn-facebook">
                              <i class="fa fa-facebook"></i>
                              Facebook
                            </a>
                        </li>
                        <li>
                            <a class="btn btn-block c-btn-square btn-social btn-google">
                              <i class="fa fa-google"></i>
                              Google
                            </a>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
        <div class="modal-footer c-no-border">                
            <span class="c-text-account">Bạn chưa có tài khoản ?</span>
            <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Đăng ký !</a>
        </div>
    </div>
</div>