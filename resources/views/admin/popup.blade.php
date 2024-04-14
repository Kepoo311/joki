<section id="promoteconf" class="fixed z-[9999] bg-[rgba(0,0,0,0.68)] hidden">
    <div class="fixed left-1/2 rounded-lg top-1/3 transform -translate-x-1/2 w-96 h-32 bg-white">
        <form action="/promote">
            @csrf
            <input type="hidden" name="iduser">
            <label for="role"
                class="block mx-2 mb-2 text-sm font-medium text-gray-900">Promote to</label>
            <select name="role" id="role"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="admin">Admin</option>
                <option value="worker">Worker</option>
            </select>
            <button class="py-2 px-3 m-3 bg-red-500 shadow-md hover:bg-red-600 rounded-lg">Confirm</button>
        </form>
    </div>
</section>