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
            
            <div class="pt-2" id="mailWrapper">
                <form action="" method="post" enctype="multipart/form-data" id="sendmail" class="sendmail">
                    <div class="form-group">
                        <div class="inner">
                            <input type="text" name="" placeholder="Recipient" aria-label="Recipient" id="" class="pl-2 pr-2 br-btm w-100">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="inner">
                            <input type="text" name="" placeholder="Subject" aria-label="Subject" id="" class="pl-2 pr-2 br-btm w-100">
                        </div>
                    </div>
                </form>
                <textarea class="form-control" rows="5" id="admin_mail"></textarea>
            </div>
            {{-- send button --}}
            <div class="row container pr-0 pt-2 pb-2 pl-0 m-0  d-flex justify-content-end">
                <div class="form-group mb-0" >
                    <button id="send" class="btn btn-send btn-sm btn-primary">Send</button>
                </div>
            </div>
            
        </div>
        {{-- ./compose message area --}}
        <div class="received-message-wrapper ">
            {{-- received message area --}}
            <div class="top-controls container">
                <div class="left-control">
                    <label class="check-container">
                        <input type="checkbox" name="" id="check_all_received" class="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
            <div class="received-message d-flex border-danger d-flex align-items-center pt-1 pb-1">
                <div class="container receivedWrapper ">
                    <div class="inbox-1 border-info">
                        <div class="inbox-wrapper">
                        <div class="left-control">
                            <label class="check-container">
                                <input type="checkbox" name="" id="" class="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="mail-message grid-width-80">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus maxime eveniet aspernatur dignissimos quidem minima nemo voluptatem, magnam ipsa doloremque quam. Quibusdam corrupti officiis aliquam incidunt consectetur, perspiciatis consequatur harum!</div>
                        <div class="right-control  align-items-center">
                            <a href="" class="btn btn-default text-black-50" role="button"><i class="fa fa-mail-reply"></i></a>
                            <a href="" class="btn btn-default text-black-50" role="button"><i class="fa fa-trash-o"></i></a>
                        </div>
                        </div>
                        {{-- ./end of inbox-wrapper --}}
                    </div>
                    <div class="inbox-1 border-info">
                        <div class="inbox-wrapper">
                        <div class="left-control">
                            <label class="check-container">
                                <input type="checkbox" name="" id="" class="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="mail-message grid-width-80">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus maxime eveniet aspernatur dignissimos quidem minima nemo voluptatem, magnam ipsa doloremque quam. Quibusdam corrupti officiis aliquam incidunt consectetur, perspiciatis consequatur harum!</div>
                        <div class="right-control  align-items-center">
                            <a href="" class="btn btn-default text-black-50" role="button"><i class="fa fa-mail-reply"></i></a>
                            <a href="" class="btn btn-default text-black-50" role="button"><i class="fa fa-trash-o"></i></a>
                        </div>
                        </div>
                        {{-- ./end of inbox-wrapper --}}
                    </div>
                    <div class="inbox-1 border-info">
                        <div class="inbox-wrapper">
                        <div class="left-control">
                            <label class="check-container">
                                <input type="checkbox" name="" id="" class="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="mail-message grid-width-80">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus maxime eveniet aspernatur dignissimos quidem minima nemo voluptatem, magnam ipsa doloremque quam. Quibusdam corrupti officiis aliquam incidunt consectetur, perspiciatis consequatur harum!</div>
                        <div class="right-control  align-items-center">
                            <a href="" class="btn btn-default text-black-50" role="button"><i class="fa fa-mail-reply"></i></a>
                            <a href="" class="btn btn-default text-black-50" role="button"><i class="fa fa-trash-o"></i></a>
                        </div>
                        </div>
                        {{-- ./end of inbox-wrapper --}}
                    </div>
                    <div class="inbox-1 border-info">
                        <div class="inbox-wrapper">
                        <div class="left-control">
                            <label class="check-container">
                                <input type="checkbox" name="" id="" class="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="mail-message grid-width-80">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus maxime eveniet aspernatur dignissimos quidem minima nemo voluptatem, magnam ipsa doloremque quam. Quibusdam corrupti officiis aliquam incidunt consectetur, perspiciatis consequatur harum!</div>
                        <div class="right-control  align-items-center">
                            <a href="" class="btn btn-default text-black-50" role="button"><i class="fa fa-mail-reply"></i></a>
                            <a href="" class="btn btn-default text-black-50" role="button"><i class="fa fa-trash-o"></i></a>
                        </div>
                        </div>
                        {{-- ./end of inbox-wrapper --}}
                    </div>
                    <div class="inbox-1 border-info">
                        <div class="inbox-wrapper">
                        <div class="left-control">
                            <label class="check-container">
                                <input type="checkbox" name="" id="" class="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="mail-message grid-width-80">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus maxime eveniet aspernatur dignissimos quidem minima nemo voluptatem, magnam ipsa doloremque quam. Quibusdam corrupti officiis aliquam incidunt consectetur, perspiciatis consequatur harum!</div>
                        <div class="right-control  align-items-center">
                            <a href="" class="btn btn-default text-black-50" role="button"><i class="fa fa-mail-reply"></i></a>
                            <a href="" class="btn btn-default text-black-50" role="button"><i class="fa fa-trash-o"></i></a>
                        </div>
                        </div>
                        {{-- ./end of inbox-wrapper --}}
                    </div>
                    <div class="inbox-1 border-info">
                        <div class="inbox-wrapper">
                        <div class="left-control">
                            <label class="check-container">
                                <input type="checkbox" name="" id="" class="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="mail-message grid-width-80">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus maxime eveniet aspernatur dignissimos quidem minima nemo voluptatem, magnam ipsa doloremque quam. Quibusdam corrupti officiis aliquam incidunt consectetur, perspiciatis consequatur harum!</div>
                            <div class="right-control  align-items-center">
                                <a href="" class="btn btn-default text-black-50" role="button"><i class="fa fa-mail-reply"></i></a>
                                <a href="" class="btn btn-default text-black-50" role="button"><i class="fa fa-trash-o"></i></a>
                            </div>
                        </div>
                            {{-- ./end of inbox-wrapper --}}
                        <div class="mail-attachments">
                            <div class="attachment-wrapper">
                                <a href="#" class="btn-default btn-attachment">Daudi's Resume.pdf</a>
                                <a href="#" class="btn-default btn-attachment ml-3 mr-3">Certificates.pdf</a>
                                <a href="#" class="btn-default btn-attachment ">CoverLetter.docx</a>
                            </div>
                        </div>
                    </div>                 
                </div>

            </div>
            {{-- ./received message area--}}
        </div>

        {{-- open message area --}}
        <div class="open-message">
            <div class="mail-heading row container p-0 m-0 d-flex justify-content-between">
                <h3 class="h5 text-gray-700">This is Example Heading</h3>
                <a class="btn btn-default text-right text-black-50 " href="" id="print_mail"><i class="fa fa-print text-lg"></i></a>
            </div>
            <div class="mail-message-area d-flex flex-column">
                <div class="message-meta d-flex justify-content-between">
                    <div class="messenger-id d-flex">
                        <h1 class="h5 mb-0">John Doe</h1>
                        <span class="ml-2 small align-self-center messenger-email-address">johndoe@example.com</span>
                    </div>
                    <div class="time-stamp">
                        Sent at 5:37 PM (15 minutes ago)
                    </div>
                </div>
                <div class="mail-message-body pt-3 pb-3 mt-2 mb-2">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati debitis ullam aspernatur dolorem, unde possimus dignissimos totam, atque, facilis sunt officia non blanditiis accusantium eos optio nam at aliquam consectetur.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi magnam temporibus similique id quas quasi voluptatem molestias sed libero aliquid nobis nemo repudiandae atque pariatur quod, tempora aliquam officia tempore.
                </div>
            </div>
        </div>
    </div>
    
    
@endsection
@push('scripts')

    <script>
        
        CKEDITOR.replace('admin_mail',{
            customConfig: '/js/minimal-ckeditor-config.js',
        });
    </script>
   
@endpush
