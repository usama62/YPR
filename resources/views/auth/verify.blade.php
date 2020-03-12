@extends('layouts.admin')

@section('content')
<main id="jf-main" class="jf-main jf-haslayout">
			<!--************************************
					Update Button Area Start
			*************************************-->
			<div class="jf-dbsectionspace jf-haslayout">
				<div class="jf-updatall">
					@if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
				</div>
			</div>
			<!--************************************
					Update Button Area End
			*************************************-->
		</main>
@endsection