<div class="dropdown-menu dropdown-menu-right mailbox animated fadeIn">
    <ul>
        <li>
            <div class="drop-title">Pemberitahuan Baru</div>
        </li>
        <li>
            <div class="message-center">
                <!-- Message -->
<<<<<<< HEAD
            @if(count($notifs) > 0)
=======
            @if(count($notifs))
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
                @foreach($notifs as $notif)
                    @if($notif->type == 1)
                        {{-- Pesanan tiket baru --}}
                        <a href="#">
                            <div class="mail-contnet">
                                <h5>Pesanan Tiket Baru</h5>
                                <span style="font-size: 11px">
<<<<<<< HEAD
                                    {!! $notif->content !!}
=======
                                    <b>{{ $notif->user->name }}</b> memesan tiket untuk event <b> {{ $notif->event->name }}</b>
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
                                </span>
                                <span class="time">{{ $notif->created_at->format('l, d M Y h:i A') }}</span>
                            </div>
                        </a>
                    @elseif($notif->type == 2)
<<<<<<< HEAD
                        {{-- Pesanan tiket dibatalkan --}}
=======
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
                        <a href="#">
                            <div class="mail-contnet">
                                <h5>Pesanan Tiket Dibatalkan</h5>
                                <span style="font-size: 11px">
<<<<<<< HEAD
                                    {!! $notif->content !!}
                                </span>
                                <span class="time">{{ $notif->created_at->format('l, d M Y h:i A') }}</span>
                            </div>
                        </a>
                    @elseif($notif->type == 3)
                        {{-- Event dibatalkan --}}
                        <a href="#">
                            <div class="mail-contnet">
                                <h5>Pesanan Tiket Dibatalkan</h5>
                                <span style="font-size: 11px">
                                    {!! $notif->content !!}
                                </span>
                                <span class="time">{{ $notif->created_at->format('l, d M Y h:i A') }}</span>
                            </div>
                        </a>
                    @elseif($notif->type == 4)
                        {{-- Event dibatalkan --}}
                        <a href="#">
                            <div class="mail-contnet">
                                <h5>Event Update</h5>
                                <span style="font-size: 11px">
                                    {!! $notif->content !!}
                                </span>
                                <span class="time">{{ $notif->created_at->format('l, d M Y h:i A') }}</span>
                            </div>
                        </a>
                    @elseif($notif->type == 5)
                        {{-- Event dibatalkan --}}
                        <a href="#">
                            <div class="mail-contnet">
                                <h5>Event Dibatalkan</h5>
                                <span style="font-size: 11px">
                                    {!! $notif->content !!}
=======
                                    <b>{{ $notif->user->name }}</b> batal memesan tiket untuk event <b> {{ $notif->event->name }}</b>
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
                                </span>
                                <span class="time">{{ $notif->created_at->format('l, d M Y h:i A') }}</span>
                            </div>
                        </a>
                    @endif
                @endforeach
<<<<<<< HEAD
            @else
                    <p style="color: #888; text-align: center">Kosong</p>
=======
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
            @endif
                
                {{-- <a href="#">
                    <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                    <div class="mail-contnet">
                        <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                    </div>
                </a>
                <a href="#">
                    <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                    <div class="mail-contnet">
                        <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                    </div>
                </a>
                <a href="#">
                    <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                    <div class="mail-contnet">
                        <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                    </div>
                </a> --}}
            </div>
        </li>
<<<<<<< HEAD
        <li>
            <a class="nav-link text-center" href="/notif"> <strong>Lihat Semua</strong> <i class="fa fa-angle-right"></i> </a>
        </li>
=======
        {{-- <li>
            <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
        </li> --}}
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
    </ul>
</div>