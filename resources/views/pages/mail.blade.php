@extends('layouts.admin')

@section('content')
<div class="container p-0 m-0">
    {{-- Compose Email button --}}
    <div class="row container p-0 m-0 mb-2 align-content-end justify-content-end">
        <a class="btn btn-default btn-circle create-email" href="#compose" id="create_email"><i class="fa fa-plus text-lg"></i></a>
    </div>
    {{-- end Compose Email button --}}
    {{-- compose mesage area --}}
    <div class="form-group mail-text-area bg-white mb-0 pt-0 d-none">
        {{-- email area controls --}}
        <div class=" row mail-text-area-controls">
            <div class="col-sm-4 d-flex align-items-center">
                <h4 class="h6 small text-white mb-0">New Email</h2>
            </div>
            <div class="col-sm-8 pr-0 mr-0 d-flex justify-content-end">
                <a href="javascript:void(0)" id="mail_minimize" class="btn pr-0 d-flex"><i class="fa fa-minus pb-0 align-self-end"></i></a>
                <a href="javascript:void(0)" id="mail_expand" class="btn pr-0"><i class="fa fa-expand"></i></a>
                <a href="" id="mail_close" class="btn "><i class="fa fa-close"></i></a>
            </div>

        </div>
        {{-- ./email-area controls --}}
        <form action="{{route('sendEmail')}}" method="post" enctype="multipart/form-data" id="sendmail" class="sendmail">
            @csrf
            <div class="pt-2" id="mailWrapper">
                <div class="form-group">
                    <div class="inner">
                        <input type="text" name="to" placeholder="Recipient" aria-label="Recipient" id="" class="pl-2 pr-2 br-btm w-100">
                    </div>
                </div>
                <div class="form-group">
                    <div class="inner">
                        <input type="text" name="subject" placeholder="Subject" aria-label="Subject" id="" class="pl-2 pr-2 br-btm w-100">
                    </div>
                </div>
                <textarea class="form-control" rows="5" name="msg" id="admin_mail"></textarea>
            </div>
            {{-- send button --}}
            <div class="row container pr-0 pt-2 pb-2 pl-0 m-0  d-flex justify-content-end">
                <div class="form-group mb-0">
                    <button id="send" class="btn btn-send btn-sm btn-primary" type="submit">Send</button>
                </div>
            </div>
        </form>


    </div>



</div>


@endsection
@push('scripts')

<script>
    CKEDITOR.replace('admin_mail', {
        customConfig: '/js/minimal-ckeditor-config.js',
    });
</script>

@endpush