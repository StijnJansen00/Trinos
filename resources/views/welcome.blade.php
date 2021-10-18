@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="flex items-center justify-center">
            <div class="space-y-6">
                <h1 class="text-5xl font-extrabold tracking-wider text-center text-gray-600">
                    Trinos - Welcome
                </h1>

                <?php
                $y = json_decode($weather, true);
                ?>

                <h1 class="text-2xl">
                    Weer <?= $y['name'] ?>
                </h1>
                <div class="border-b shadow">
                    <table>
                        <thead>
                        <tr class="bg-gray-200">
                            <th class="px-6 py-6 text-sm">TEMP</th>
                            <th class="px-6 py-6 text-sm">FEELS_LIKE</th>
                            <th class="px-6 py-6 text-sm">TEMP_MIN</th>
                            <th class="px-6 py-6 text-sm">TEMP_MAX</th>
                            <th class="px-6 py-6 text-sm">PRESSURE</th>
                            <th class="px-6 py-6 text-sm">HUMIDITY</th>
                            <th class="px-6 py-6 text-sm">SEA_LEVEL</th>
                            <th class="px-6 py-6 text-sm">GRND_LEVEL</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $temp = number_format($y['main']['temp'], 1);

                            if ($temp < 20) {
                                echo "<tr class='bg-blue-200'>";
                            } else if ($temp < 22) {
                                echo "<tr class='bg-green-200'>";
                            } else if ($temp > 22) {
                                echo "<tr class='bg-yellow-200'>";
                            }
                            ?>
                                <td class="px-6 py-4 border"><?= $temp ?></td>
                                <td class="px-6 py-4 border"><?= $y['main']['feels_like'] ?></td>
                                <td class="px-6 py-4 border"><?= $y['main']['temp_min'] ?></td>
                                <td class="px-6 py-4 border"><?= $y['main']['temp_max'] ?></td>
                                <td class="px-6 py-4 border"><?= $y['main']['pressure'] ?></td>
                                <td class="px-6 py-4 border"><?= $y['main']['humidity'] ?></td>
                                <td class="px-6 py-4 border"><?= $y['main']['sea_level'] ?></td>
                                <td class="px-6 py-4 border"><?= $y['main']['grnd_level'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <ul class="list-reset">
                    <li class="inline px-4">
                        <a href="https://tailwindcss.com"
                           class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Tailwind
                            CSS</a>
                    </li>
                    <li class="inline px-4">
                        <a href="https://github.com/alpinejs/alpine"
                           class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Alpine.js</a>
                    </li>
                    <li class="inline px-4">
                        <a href="https://laravel.com"
                           class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Laravel</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
