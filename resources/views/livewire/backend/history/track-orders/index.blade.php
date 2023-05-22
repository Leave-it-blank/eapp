<div class="container mx-auto p-20">
    <h1 class="text-2xl font-bold">Orders</h1>
    <div class="flex flex-col ">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                        <tr class="capitalize">
                            <th scope="col" class="px-6 py-4">#</th>
                            <th scope="col" class="px-6 py-4">waiting</th>
                            <th scope="col" class="px-6 py-4">full_filled</th>
                            <th scope="col" class="px-6 py-4">pick_up_date</th>
                            <th scope="col" class="px-6 py-4">user</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $o)
                            @if($o["pick_up_date"] != null)
                        <tr class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{$o["id"]}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$o["waiting"]}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$o["full_filled"]}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{$o["pick_up_date"]}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ auth()->user()->name }}</td>

                        </tr>
                            @endif
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
