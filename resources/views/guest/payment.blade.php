    <!-- Pembayaran Kas -->
    <div class="m-48">
        <div class="card rounded-2xl bg-text mx-72 pb-1 w-1/2 mb-10">
            <span class="text-center text-5xl font-bold">PEMBAYARAN KAS</span>
        </div>
        <div class="card card-compact w-96 bg-text mx-96 shadow-xl">
            <div class="card-body">
                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Masukkan NIM Anda :</span>
                    </label>
                    <input type="tel" class="input input-bordered w-full h-7 rounded-full max-w-xs" />
                </div>
                <span>Metode Pembayaran :</span>
                <div class="flex">
                    <div>
                        <img class="w-24 mx-6 my-2" src="{{ asset('assets/QRIS (Quick Response Code Indonesia Standard) Logo (PNG720p) - Vector69Com 1.png') }}" alt="qris" />
                        <img class="w-24 mx-7" src="{{ asset('assets/Logo OVO (PNG-240p) - FileVector69 1.png') }}" alt="ovo" />
                    </div>
                    <div class="mx-3">
                        <img class="w-44" src="{{ asset('assets/Logo DANA (PNG-480p) - FileVector69 1.png') }}" alt="dana" />
                        <img class="w-40 mx-3 my-4" src="{{ asset('assets/Logo GoPay (PNG-480p) - FileVector69 1.png') }}" alt="gopay" />
                        <img class="w-40 mx-3" src="{{ asset('assets/Bank BCA Logo (PNG-480p) - FileVector69 1.png') }}" alt="" />
                    </div>
                </div>
                <div class="card-actions my-3 justify-center">
                    <button class="btn btn-xs rounded-full bg-base-100 font-medium border-none w-36 capitalize text-black">
                        Lanjutkan
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Pembayaran Kas -->
