@extends('user.main')

@section('content')
    <div id="acc" class="p-4 sm:ml-64">
        <div id="riview" class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

            <header>
                <h1 class="font-poppins font-semibold text-xl">Riview</h1>
            </header>

            <section class="w-[35rem] h-fit rounded-lg bg-gray-800">
                <form class="p-3" action="/user/riview/kirim" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{$token}}">
                    <input type="hidden" name="product_id" value="{{$riviews[0]->product_id}}">
                    <input type="hidden" name="rank" value="{{$riviews[0]->rank}}">
                    <label for="bintang" class="text-md font-poppins text-white">Bagaimana pelayanan kami?</label>
                    <select id="bintang"
                        name="bintang"
                        class="bg-gray-700 border border-gray-600 text-gray-50 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2 mt-2">
                        <option value="5">Pls rate us!</option>
                        <option value="1">Bintang 1</option>
                        <option value="2">Bintang 2</option>
                        <option value="3">Bintang 3</option>
                        <option value="4">Bintang 4</option>
                        <option value="5">Bintang 5</option>
                    </select>


                    <label for="message" class="block mt-2 mb-2 text-md font-poppins text-white">Komentar mu</label>
                    <textarea id="message" name="comment" rows="4"
                        class="block p-2.5 w-full text-sm rounded-lg bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Write your thoughts here..."></textarea>

                        <button type="submit" class="bg-blue-500 text-white mt-2 px-5 py-2 rounded-lg shadow-lg duration-500 hover:bg-blue-600 focus:ring-2 focus:to-blue-600">Submit</button>
                </form>
            </section>

        </div>
    </div>
@endsection
