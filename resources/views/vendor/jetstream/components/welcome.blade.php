<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="mt-8 text-2xl">
        Welcome to Foot Trail, {{ Auth::user()->first_name }}!
    </div>

    <div class="mt-6 text-gray-500">

    </div>
</div>

@if(Auth::user()->hasRole('user'))
    <div class="bg-gray-200 bg-opacity-25 p-6">
        <video id="preview" class="m-auto"></video>
        <script type="text/javascript">
            window.addEventListener('DOMContentLoaded', (event) => {
                console.log('DOM fully loaded and parsed');
                let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
                scanner.addListener('scan', function (content) {
                    alert('You checked in at '+ content);
                });
                Instascan.Camera.getCameras().then(function (cameras) {
                    if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                    } else {
                    console.error('No cameras found.');
                    }
                }).catch(function (e) {
                    console.error(e);
                });
            });
        </script>
    </div>
@endif

@if(Auth::user()->hasRole('provider'))
    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
        <div class="p-6">
            <div class="flex items-center">
                <x-fas-qrcode  class="w-8 h-8 text-gray-400"/>
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><span>Scan and Done</span></div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                    You can create multiple Scan and Done trails. Create differnt trails for every store branch you have. Per trail gets their own unique QR code that you can print an post on your store entrance.
                </div>

                <a href="#">
                    <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                            <div>Manage your Scan and Done QR codes here</div>

                            <div class="ml-1 text-indigo-500">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
            <div class="flex items-center">
                <x-heroicon-s-user-group  class="w-8 h-8 text-gray-400" />
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><span>Rest Queue</span></div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                    Don't let your customers line up. Generate a QR code, let them scan it, and they will be given their queue number. They can be free to roam within the vicinity as they wait their turn. Don't worry, customers will be notified when it's almost their turn.
                </div>

                <a href="#">
                    <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                            <div>Manage your Rest Queue QR codes here</div>

                            <div class="ml-1 text-indigo-500">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="p-6 border-t border-gray-200">
            <div class="flex items-center">
                <x-entypo-time-slot class="w-8 h-8 text-gray-400" />
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><span>Lose Wait</span></div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                    No need to have your waiters wait on a table. Give each table a QR code that a customer scans, and from their they can place their orders directly. The kitchen will be notified immidiately. Saves precious time and your waiters can no longer be blamed for wrong or missing orders.
                </div>

                <a href="#">
                    <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                            <div>Manage your Lost Wait QR codes here</div>

                            <div class="ml-1 text-indigo-500">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="p-6 border-t border-gray-200 md:border-l">
            <div class="flex items-center">
                <x-entypo-heart class="w-8 h-8 text-gray-400" />
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">QR the One</div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                    Loyalty is both ways, as your customers remember you, you should also remember them. With the Foot Trail suite you'll know who's been around more frequently, use this Loyalty Reward feature to grow your relationships with your customers even more.
                </div>

                <a href="#">
                    <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                            <div>Manage your QR the One rewards here</div>

                            <div class="ml-1 text-indigo-500">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endif
