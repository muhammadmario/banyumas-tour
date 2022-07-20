@extends('main.user.main')

@section('content')
    <main class="px-2 md:px-20 mt-16">
        <div class="h-[70vh] w-full  relative flex items-center justify-center flex-col">
            <img class="aspect-[2/3] object-cover w-full h-full" src={{ asset('storage'.$destination->image) }} alt="hero-img">   
            <div class="w-1/2 md:h-1/3 absolute flex justify-center items-center backdrop-blur-sm">
                <h1 class="text-3xl md:text-7xl text-white">{{$destination->name }}</h1>
            </div>
        </div>
        <div class="w-full flex flex-col md:flex-row mt-6 gap-3">
            <div class="w-full md:w-2/3">
                <iframe class="w-full aspect-video" src="{{ $destination->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>     
                <h2 class="text-3xl">{{ $destination->name }}</h2>
                <p>{{ $destination->description }}</p>      
            </div>
            <div class="md:w-1/3 flex flex-col gap-3">
                <div class="p-4 max-w-sm bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Harga</h5>
                    <div class="flex items-baseline text-gray-900 dark:text-white">
                        <span class="text-3xl font-semibold">Rp</span>
                        <span class="text-3xl lg:text-5xl font-extrabold tracking-tight">{{ $destination->price}}</span>
                        <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400">/tiket</span>
                    </div>
                    <!-- List -->
                    <ul role="list" class="my-7 space-y-5">
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Diskon 50% untuk anak-anak</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Free coca-cola</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Free tourguide</span>
                        </li>
                        
                    </ul>
                    <a href="/tiket" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Pesan sekarang</a>
                </div>
                <div class="p-4 max-w-md bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Customers</h5>
                        <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                            View all
                        </a>
                   </div>
                   <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="data:image/jpeg;base64,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" alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Neil Sims
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            Tempatnya indah dan asri
                                        </p>
                                    </div>
                                
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="data:image/jpeg;base64,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" alt="Bonnie image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Bonnie Green
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            Keren si, ga nyesel datang kesini
                                        </p>
                                    </div>
                              
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="data:image/jpeg;base64,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" alt="Michael image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Michael Gough
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            Recommended banget buat kalangan anak muda
                                        </p>
                                    </div>
                                  
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="data:image/jpeg;base64,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" alt="Lana image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Lana Byrd
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            Bintang 5 pokoknya hehehe
                                        </p>
                                    </div>
                             
                                </div>
                            </li>
                            <li class="pt-3 pb-0 sm:pt-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBAPEA4PEA4ODg4ODg4ODg4PEBAOEA4OFxMYGBcTFxcaICwjGhwoHRcXJEIkKC0xMjIyGSI4PTgwPCwxMy8BCwsLDw4PHBERHDQoIigzMTExMTExMTExMS8xMTExMTExMTExMTExMTExMTExMTExMjExMS8xMTExMTExMTExMf/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAAAQIDBAUHBv/EAEAQAAICAAIGBwYEBAMJAAAAAAABAgMEEQYSITFBkQUTFFFhcYEiMlJTocEHI2KxJJLR8ELC4TNEY3JzgqKy0v/EABsBAQEAAgMBAAAAAAAAAAAAAAABBQYCAwQH/8QAMxEAAgECAwYFAgUFAQAAAAAAAAECAxEEEyEFEjFBUZFSYXGBobHBBiIy0fAUQmLh8SP/2gAMAwEAAhEDEQA/APvASQfMTNAAAAAAAAAEkAAAEoMAgAAAEkAAAIAAAtwAAQEkAAAlMEF4AkgAgAAAAAAALFSgAAgJIAABORAKgAAAAAQAAAAAAAAAAAAAFipQAAQAAAAAAAnMgFAAJICAAAAAAAAADn9K9M4fCLO61Rk1nGuPtWS8or93sOHpdpYsJnRQ08Q17c9klSnwy4z+i4nmOJxdlspTlKUpTecpSblKT722ZrAbIlXjmVXaPLq/2X1OqdW2i4n32P0/ntVFEILhK960n/2xyS5s41ummNl/vEIeEKq8vqmfJF4w4vcZ+ns3C0+FNe+v1udDqSZ9TXpfjlt7Un4Srp/+ToYTTvExy6yqi6PhrVSfqs19D4ac8/BIrFtbm15HKez8LNWdOPsrfSwVSS5nsfROlmFxLUHJ4e17FC7JKT7oz3P6PwO8eCwxHCW1d59tonpXKpwoxE3OiWUa7pPN0PgpPjD9vLdhMdsXci6lC76x4v2fP0evmzuhVvoz0QAGvncSSQQygAEgEAAgABIBAAAABIBAAAAJRJbAMqAADkaUdMLA4Wy3Y7ZNVURf+K2SeXokm/Q655r+J+McsRh8On7NdPWtcHOyWS5KH1Z7Nn4dV8RGEuHF+i1+eHucKkt2Nz4u22VkpTnJynJuUpN5tybzbZjAN6PEWi8mJyzby3GvO157Ny+pMLu/mgLmUBPMAAzUWaryfuv6eJhAB67oN0q78O6ZvOzC6sE3vlS/cfpk16I+mPLfw9xbhjIxz2XVW0td7S11/wCv1PUzStq0FRxMklo9V78flM9tN3iVBYqY05gAAAkElSBUEkAAAEAAAAAJAIAAAJIAAPH9O7tfpHEr5apr5VRl/mPYDxXSuyL6Qx0m918lyyX2M3sGN8RJ/wCP3R01/wBJxzFZZnsjm89mza2+5FqoWXWQqqhKc7JasK475P8Av9j1LRHQurB6mIvcbsVviltqof6c/el+p+mXHaZzUOJ54xcuBraL6EUxwyljaYTvteu4T1s6YZezDY9j4vxeXAw9L/h7RJN4aydE+ELG7aZer9qPnm/I9AIlFPYzy5kr3uerLja1jwLH4C/B2uq+t1y2tZ7YWR+KEtzX9spGSe1HtnS3RNOJrdN9asre1PdKEvii98X4o8r0h0XxHR7dkc7sLnstS21rusS3f827y3Hop1VLR8TonScdVwOQZIRy2v0XeRHLJS3967iJSzO06js6K3amNwst38TUv5nqv9z2k8L6EeWJw/hfQ/VWxPdDVtvr/wBYPyfw/wDZ6qHBlSSAYE7gAACxBALcAAEAAAAABUAACAAAAAAAseZYvQfFY3GY66dkMLTPFXOlyi7Z2rP3tVNZR8W/Q9NKS+7Mzsae7Vm09bff/nc4SgpcTyT8OcNljr3Je1VTZX5Sc4pv/wAWvU9Xp91ev7nwWjGCdHSvS0Wmlrwsg++Fk7JrL9vQ+7ofs+rNiqu8r+hxpK0beplAB1nYDBZRvyWae+L27DOAD4fpbQXDXNzw8ng7HvjCOtS3/wBPZq+jXkfIdN6OX4CMbLZ0zrnPq4OuU9ZvVbzcXHZu72ezSgnvR8d+IWB62rBRSbjPHV0z8FanFPns9Ttp1JXSb0OmpCNm0croDQm/+FxVl1dft03dS4ycur1oy2y4SyW7L1PSSuXdu4Iu/sl9DA7ae9uSb11Xto/r9TtjFR4EAsQzBHIgAEABJAAAAABORJd1i5DIAAAJIIAAAAAAARL7ZepJLR6sHXyKyny4P0f8QONZBK6UslrOWTlltcc20s+72nzN/DvevU1cbHKx+KT+32Mlc9zRtUJxnFSjwZDdAi01mGcwAAADFiMPC2KjZFSUbK7Ip8LK5qcZejijKP6kbtqCV/qXISCNXx+JjXq3j+lKy+7/AJySKSAVPEAACAAAAEggoAAIACSAAAWKCESCoALFQQAsVABrY6rWSkt8d/jA06JpbH6HVNLFYTfKC84/0M1s3Gxismo/R/Z/bsQQsa+6NmE0/PuObC3LY/8AVGaMk9zM6DeBqqyS489pPXS8OQBsiDz3cOPiYK4ynvb1TZisti3GJ2ljFCLower4+S/d8PLsCSQDXigqWKgAAAAFipWgAAQAEgoIABACSAAAAACxUAAEtpJttJLe3sSRycZpBhqs1ru2XdUtZc9x30MLWxEt2jByfkr29XwXuzqq16dJXqSSXmdU3+j8IrNZyzyyWT3bT4DFaU3TzVdcav1P8yX12fQ7Wg/T1krJYfEScuualTOWS/My2x8mls8V4myYD8O1oTzcSo2V/wAt7v3t+XTjo2Yye16E5KnTbu+fBfOuvoZuncBfRZK3V16XulFZqK/UuD8dxzIYtcU0/Bnpclnse1PY13o+d6R0ark3ZSlCe91v/Zyfh8L+nkZV4RQilT4Lkeylik9J9z52OJk9yl65I2sHh7r5asFn8Ut0I+bOr0do/J5Sveqvlxe1+bW70+h9FTVGEVGEVGK3RSyQp4dvWWhyqYlR0jq/g5OKwPV1qSabWSnwW3uNInTHpfqKo0wllddtzW+Fae1+r2c+4+Uw2kNsMlZBW/q9x81s+hi8d+HqlS1TCpWt+m9ndc1fTXndrW75nhW1qNKeXVvfra69HbX4PqgczC9M0WbNdwl3T9lc9x0U89q2p7mjWsRhq2Hlu1oOL81a/p19jJ0q1Ost6nJNeRYqWKnQdpJLKgtwACSAgAAAAAAEsgrAABAACwBS22MIuc2oxis5Sk8kkfOY/SiKzjRDXz2dZZmkn4Lfz5EaYYlpU1LdLWtmvL3f8x8q3mbjsTYlCrRjia63r3suVk2rvre1+luRru09p1adR0aWluL59dOnT1NjGY669/m2OXdFvJLyS3GOuhvfsX1Iw8c5Lw2m4bfCEYxUYqyXJKy7LQ12c5SlvSd31epSFcY7l6veXzexpuLTTUk8nGSeaafemAcjgej6L6QRxkOrsajiqllOO7rI/HH7rg/Qy6UdNrBUZxyd9ucKIvbnLjJruWfNpcTzB60ZRshKULIPOE4txkn4NbjJfibr59biLJWWKKjFyyWrFcElsR5/6db3kZNbRllWa/N1+/r/ADyPvtDOnpYqEqLpZ4mlZ6z3215+95rNJ+aO70p0hXhKp3WvKEVsS96cuEYri2eS0Yiymyu+qWrZU9aL35rjFrims1l4mTpDpLEY2xWYieajn1dUVlGHlH7vaSVC8r8jlT2ju0bNXkicdjbMTbO+337HnqraoRXuwXgl93xMAB6UraGLbbd2DPhsbbU/YsaXdvT9HsMASzOM4RnFwmk0+KauuzLCUoS3ouz6rR9z6PB6QxeSuhq/8SvNr1X9Mzt1XQnFSjKM4vc080fAtZHQ6DxTrvjHP2LWq5rhnuj655fU1jaf4eoSpyq4Zbskm93k7Juyvqn0s7eXMzuB2zV34062qbtfg1f6rr3ufYAA0Y2gAAAAFi26gbAQC3BABJxBAAABJAQbsrlSufC6T36+JsjwqjGC9Ft+rZyTNjbustss+O2cvRttGE+tYWjkUIUvDFL3S1NAxFTMrTn1bftfT4NjCr3n5I2DFh1lFeLbMp6EeZgAstnmAioAAAAAAAACWZbPLcNbZkVHEAKTW1bGtq81uAKuJHwPvq56yUluklJeTWZY0+iLNeil/oy/lk19jcPkOIpZVadNf2trs2j6LSqZkIz6pPvqAAdRzAAAAAAABIBBYFWXgAYMdZqU3S+Gqcl56ryMsrIx3v04nJ6fucsPZCuMnKbilknn7yb3eCZ6cFRzcRTg+DlG/pdX+DqrycKU5pXsm/g+GSJNjsN/ybP5ZExwN+a/Ks3r/DI+qOrDxLuaIqFVK24+zMsFkkvBFjN2O35cuTHY7fly5MubDxLucMmp4X2ZjezcVM3Y7fly5Mdjt+XLkyZkPEu5cmp4H2ZhBm7Hb8uXJjsdvy5cmXNh4l3Jk1PC+zMIM3Y7fly5Mdjt+XLkxmQ8S7jJqeF9mYQZux2/LlyY7Hb8uXJjNh4l3GTU8L7Mwgzdjt+XLkx2O35cuTGbDxLuMmp4X2ZhBm7Hb8uXJjsdvy5cmMyHiXcZNTwvsz6bRuX8Ol8Nk488n9zqHD0fm64ThZCUfzE1w4ZcfI7Uboy2J+j2HzXbNO2OrNcHK/dJ/c3fZyl/SU7rgku2hYAGKPYASQAWBUAAEkAAAAGC2jWbaeTfeYZYea4Z+TN0HNTZzU5I0HCS3xfJlDpBou+uhyzWc0HRcI/CuSK9VH4UXfj0+hc00Ab3UQ+H9x2eHd9WXfj0LmmiDd7NDufNjs0e58xvR6fAzUaRLNzqIdz5js0O582Xeh0+Bmo0gb3Z4d31Y6iHw/Vk34dBmmiDf6mPwosq4/CuSJvx6fQmac4vGDfB8jeSXcSTfXQmazSVE3wy89hlhhvifojYAdR8ji6jYBJB1nAAAAAAAAAAAkgAEkE5lQJIBAAABAAAABmSQUAAEAAAAAAAAAAAAAALFAKlioYAAIAAAAAAAAAAAAAAAAAAAAAAAAAAACy3FQCsBEgAAgAAFmAVcGCoAOILAAA//9k=" alt="Thomas image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            Thomes Lean
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            Indah bettt
                                        </p>
                                    </div>
                                   
                                </div>
                            </li>
                        </ul>
                   </div>
                </div>
            </div>
        </div>
    </main>
@endsection