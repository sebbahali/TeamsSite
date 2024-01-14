<div>
    <section class="contact-us" id="contact-us">
        <div class="custom-shape-divider-top-1646734235">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="container">
            <h2 class="section-header">اتصل بنا</h2>
            <p>نحن معك بضغطة زر</p>
            <div class="row mt-5">
                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form wire:submit.prevent="save" id="contact-form" name="contact-form" method="POST">
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-6 mt-3">
                                <div class="md-form mb-0">
                                    <label for="name" class="text-white mb-2">اسمك</label>
                                    <input wire:model="name" type="text" id="name" name="name" class="form-control form-control-lg"  placeholder="اكتب اسمك">

                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 mt-3">
                                <div class="md-form mb-0">
                                    <label for="email" class="text-white mb-2">البريد الالكتروني</label>
                                    <input wire:model="email" type="text" id="email" name="email" class="form-control form-control-lg" placeholder="البريد الالكتروني">

                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <div class="md-form mb-0">
                                    <label for="subject" class="text-white mb-2">الموضوع</label>
                                    <input wire:model="subject" type="text" id="subject" name="subject" class="form-control form-control-lg" placeholder="موضوع الرسالة">

                                    @error('subject')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12 mt-3">
                                <div class="md-form">
                                    <label for="body" class="text-white mb-2">الرسالة</label>
                                    <textarea wire:model="body" type="text" id="body" name="body" rows="5" class="form-control form-control-lg" placeholder="تفاصيل الرسالة"></textarea>

                                    @error('body')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <button type="submit" class="btn btn-main btn-lg mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                            </svg> ارسال
                        </button>
                    </form>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center mt-5">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="60" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"/>
                                </svg>
                            </span>
                            <p class="text-white mt-2">سلطنة عمان، قريات</p>
                        </li>
                        <li>
                            <span class="icon mt-3 d-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="60" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg>
                            </span>
                            <p class="text-white mt-2">{{ $club->phone }}</p>
                        </li>
                        <li>
                            <span class="icon mt-3 d-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="60" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                </svg>
                            </span>
                            <p class="text-white mt-2">{{ $club->email }}</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1646734621">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    @if (session()->has('feedback_sended'))
        <script>
            swal({
                icon : "success",
                title : "شكرا لك !!",
                text : "تم ارسال الرسالة بنجاح سيتم مراجعتها من الادارة",
                buttons: {
                    confirm: "موافق",
                }
            });
        </script>
    @endif
</div>
