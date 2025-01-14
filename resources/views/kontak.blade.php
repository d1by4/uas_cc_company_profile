@extends('layout.mainlayout')
@section('title', 'Kontak')

@section('content')
    <section id="kontak-banner">
        <div class="banner" style="background-image: url('{{ asset('/img/gambar_menu/coffeelatte.jpg') }}">
            <div class="content">
                <h1>Kontak</h1>
                <p>Hubungi kami jika ada saran maupun keluhan</p>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section id="contact">
        <div class="contact main-container">
            <div class="contact-left">
                <form class="contact-form" action="https://formspree.io/f/mdorbwvd" method="POST">
                    <div>
                        <input type="text" placeholder="Name" name="name" id="form" />
                    </div>
                    <div>
                        <input type="email" placeholder="Email" name="email" id="form" />
                    </div>
                    <div>
                        <textarea name="message" placeholder="Message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <button class="btn-submit" id="form">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="contact-right">
                <!-- contact item 1 -->
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M12 19c4.5-3.893 8-6.872 8-11.23 0-4.291-3.582-7.77-8-7.77s-8 3.479-8 7.77c0 4.358 3.5 7.337 8 11.23zm-5.761-10h2.761v-2h-2.786c.393-2.446 2.324-4.379 4.786-4.799v2.799h2v-2.799c2.462.42 4.393 2.353 4.786 4.799h-2.786v2h2.761c-.452 2.368-2.354 4.223-4.761 4.632v-2.632h-2v2.632c-2.406-.409-4.309-2.264-4.761-4.632zm13.761 7h-1.801c-.629.673-1.316 1.335-2.041 2h2.605l.5 1h-4.218l-1.146 1h1.025l.858 2h-7.487l.858-2h.947c-.389-.336-.772-.669-1.147-1h-1.995l-1.011-1h1.895c-.725-.664-1.41-1.327-2.039-2h-1.803l-4 8h24l-4-8zm-12.794 6h-3.97l1.764-3.528 1.516 1.528h1.549l-.859 2zm8.808-2h3.75l1 2h-3.892l-.858-2z" />
                        </svg>
                    </div>
                    <div class="contact-item-detail">
                        <h4>Address</h4>
                        <p>Renon, Denpasar Selatan, Kota Denpasar, Bali</p>
                    </div>
                </div>

                <!-- contact item 2 -->
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path
                                d="M16 22.621l-3.521-6.795c-.007.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.082-1.026-3.492-6.817-2.106 1.039c-1.622.845-2.298 2.627-2.289 4.843.027 6.902 6.711 18.013 12.212 18.117.575.011 1.137-.098 1.677-.345.121-.055 2.102-1.029 2.11-1.033zm4-5.621h-1v-13h1v13zm-2-2h-1v-9h1v9zm4-1h-1v-7h1v7zm-6-1h-1v-5h1v5zm-2-1h-1v-3h1v3zm10 0h-1v-3h1v3zm-12-1h-1v-1h1v1z" />
                        </svg>
                    </div>
                    <div class="contact-item-detail">
                        <h4>Phone</h4>
                        <p>082357399874</p>
                    </div>
                </div>

                <!-- contact item 3 -->
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M.026 24l11.974-11.607 11.974 11.607h-23.948zm11.964-23.961l-11.99 8.725v12.476l7.352-7.127-5.653-4.113 10.291-7.488 10.309 7.488-5.655 4.108 7.356 7.132v-12.476l-12.01-8.725z" />
                        </svg>
                    </div>
                    <div class="contact-item-detail">
                        <h4>Email</h4>
                        <p>kodyacoffee10@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact -->
@endsection
