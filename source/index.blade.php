@extends('_layouts.main')

@section('navigation')
<nav id="main-nav" class="fixed top-0 w-full z-50 flex items-center justify-center py-1 opacity-95 h-auto transition"
     x-data="{positionTop: true, showDropdown: false}"
     @scroll.window="positionTop = (window.pageYOffset < 300) ? true : false"
     :class="!positionTop || showDropdown?'bg-neutral-800 shadow':''"
    >

    <!--Desktop-->
    <div class="w-full sm:w-4/5 md:w-full lg:w-2/3 m-auto items-center justify-center hidden md:flex md:flex-row h-20">
        <svg class="h-15 text-accent" viewBox="0 0 64 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.56,22.05c-.02-1.32.23-2.57.64-3.8.69-2.03,1.76-3.78,3.55-5.03,1.42-.99,3.02-1.46,4.73-1.55,2.4-.12,4.71.23,6.87,1.34,1.75.9,3.01,2.25,3.49,4.21.37,1.51.2,2.98-.56,4.35-.73,1.32-1.83,2-3.36,2-1.53,0-3-.21-4.4-.86-.09-.04-.26-.03-.35.02-1.58,1.04-3.34,1.48-5.19,1.63-.34.03-.67.05-1.12.09.28.39.52.73.78,1.05.03.04.18.02.27,0,2.64-.93,5.34-1.07,8.08-.63,2.69.43,4.9,1.71,6.58,3.83,1.32,1.66,1.76,3.61,1.58,5.71-.03.36-.11.71-.14,1.07,0,.1.02.25.1.31,1.11.93,2.15,1.93,2.99,3.2.06-.25.13-.45.15-.64,0-.07-.06-.18-.13-.22-.72-.49-1.03-1.17-.88-2.01.14-.82.65-1.33,1.45-1.58.08-.02.18-.18.18-.28-.04-.86-.07-1.73-.15-2.59-.16-1.8-.34-3.6-.51-5.39-.29-3.12-.59-6.23-.88-9.35-.14-1.46-.3-2.92-.41-4.38-.04-.5.02-1.04.15-1.52.29-1.11,1.23-1.75,2.48-1.75,1.35,0,2.25.86,2.32,2.36.04.81-.08,1.63-.14,2.45-.18,2.25-.36,4.5-.56,6.74-.2,2.33-.41,4.67-.64,7-.21,2.1-.44,4.2-.67,6.3-.04.32.03.49.33.67.73.43,1.03,1.13.9,1.96-.13.82-.63,1.36-1.43,1.58-.25.07-.32.17-.34.42-.04.56-.11,1.11-.21,1.66-.07.37-.02.7.1,1.06.97,2.75,1.46,5.58,1.36,8.5-.11,2.92-.84,5.66-2.62,8.04-1.39,1.85-3.22,3.12-5.3,4.08-1.83.84-3.76,1.3-5.74,1.5-2.98.3-5.96.29-8.89-.51-2.54-.69-4.84-1.85-6.75-3.69-2.23-2.14-3.59-4.74-3.95-7.83-.25-2.17.03-4.26,1.12-6.19.22-.4.53-.75.77-1.14.09-.14.17-.34.14-.5-.23-1.29-.32-2.59-.24-3.89.29-5.01,2.16-9.23,6.17-12.39.02-.01.03-.03.07-.07-.63-.96-1.12-1.98-1.33-3.15-.59-.09-1.18-.17-1.77-.28-2.49-.46-4.88-1.2-6.96-2.71-1.68-1.21-2.81-2.79-3.18-4.87-.32-1.79.11-3.4,1.07-4.91,1.28-2.02,3.08-3.44,5.2-4.5,2.09-1.05,4.32-1.66,6.64-1.88,1.37-.13,2.75-.2,4.13-.21,1.75-.02,3.5-.01,5.25.1,1.73.11,3.46.3,5.18.56,1.72.26,3.4.7,5.12.94,2.11.31,4.2.18,6.16-.75,1.52-.73,2.55-1.87,2.79-3.6.07-.5.01-1.03,0-1.54,0-.13-.03-.25-.04-.38.04,0,.08-.01.13-.02.11.74.3,1.47.33,2.21.1,2.86-1.28,4.78-4.15,5.88-1.32.51-2.69.73-4.09.86-1.91.18-3.83.14-5.74-.01-1.54-.13-3.07-.33-4.6-.48-1.81-.18-3.61-.37-5.42-.48-1.46-.09-2.93-.13-4.4-.11-1.95.02-3.89.18-5.75.81-2.65.9-4.44,2.64-5.25,5.33-.23.76-.14,1.56.14,2.31.78,2.06,2.25,3.48,4.22,4.42,1.22.58,2.52.93,3.86,1.08.22.03.45,0,.71,0ZM19.07,46.57s-.08.04-.1.06c-.14.18-.28.37-.4.56-.84,1.27-1.28,2.66-1.19,4.18.1,1.65.64,3.16,1.54,4.54,1.56,2.39,3.76,4,6.34,5.12,1.58.69,3.23,1.13,4.93,1.41,2.09.34,4.19.46,6.28.21,3.36-.39,6.04-2.04,8.04-4.74,2.09-2.82,2.95-6.01,2.74-9.5-.02-.29-.07-.59-.11-.88-.04-.28-.09-.56-.14-.8-.55,1.16-1.06,2.34-1.65,3.48-1,1.91-2.27,3.61-3.93,5-2,1.69-4.31,2.61-6.92,2.71-.78.03-1.6.04-2.35-.15-1.22-.32-2.43-.72-3.58-1.24-4.2-1.86-7.32-4.84-9.15-9.1-.12-.29-.24-.58-.36-.88ZM30.11,52.56c.08-.06.14-.1.2-.15,1.28-1.08,2.44-2.26,3.47-3.58,1.11-1.42,2.04-2.95,2.47-4.73.14-.58.23-1.17.17-1.76-.62-.03-1.21-.04-1.8-.1-1.04-.11-2.01-.43-2.79-1.17-.99-.95-1.3-2.11-.91-3.42.34-1.14,1.08-1.96,2.28-2.15,1.38-.21,2.57.31,3.44,1.37.8.97,1.24,2.15,1.45,3.4.07.39.22.51.62.44.21-.04.44-.08.63-.18,1-.51,1.58-1.39,2.14-2.37-.63-.51-1.22-1.02-1.84-1.48-1.89-1.43-4.01-2.43-6.17-3.38-2.36-1.04-4.81-1.88-6.9-3.49-1.73,1.38-2.94,3.13-3.73,5.18-.86,2.21-1.11,4.5-.93,6.88.14-.02.24-.04.35-.06,1.4-.25,2.8-.31,4.2-.03,2.32.47,3.72,1.87,4.2,4.18.32,1.51.21,3.03-.08,4.53-.13.68-.31,1.35-.48,2.06ZM29.26,54.31c1.29.61,2.6,1.09,4,1.3,1.94.3,3.79.08,5.53-.85,1.86-1,3.19-2.53,4.29-4.28,1.31-2.08,2.13-4.37,2.74-6.73.03-.11-.01-.26-.08-.35-.67-.94-1.34-1.89-2.04-2.81-.35-.47-.77-.89-1.18-1.35-.1.15-.17.26-.25.37-1.04,1.43-2.14,2.76-4.12,2.81-.37,1.88-.73,2.89-1.53,4.25-1.41,2.39-3.31,4.34-5.41,6.11-.63.53-1.28,1.02-1.95,1.54ZM32.11,21.78c-.08-.06-.12-.09-.16-.13-.87-.65-1.23-1.53-1.05-2.59.23-1.4.84-2.27,2.05-2.62,1.19-.34,2.24.2,2.54,1.4.32,1.23-.01,2.33-.78,3.32-.18.24-.39.45-.6.69.07.04.11.06.15.08,1.34.67,2.78.83,4.25.7.71-.06,1.32-.39,1.76-.96.78-1.02.87-2.18.57-3.37-.54-2.15-1.97-3.53-3.95-4.39-1.63-.7-3.35-.9-5.1-.72-1.35.14-2.63.57-3.6,1.55-2.17,2.18-2.49,4.83-1.85,7.71,1.45.1,2.82.2,4.2.05.59-.06,1.12-.25,1.59-.74ZM28.3,53.67c.1-.12.2-.21.26-.32.19-.32.38-.64.53-.97.95-2.15.88-4.32-.02-6.45-.51-1.2-1.44-1.99-2.72-2.33-1.36-.36-2.66-.12-3.93.42-.08.03-.14.23-.12.33.49,2.07,1.32,3.99,2.54,5.74.95,1.36,2.07,2.54,3.45,3.58ZM30.5,27.78s-.02.1-.02.15c.86.43,1.7.88,2.57,1.3,2.98,1.42,5.9,2.95,8.65,4.8.29.19.57.39.88.61.19-1.54.02-2.97-.74-4.29-.87-1.51-2.27-2.31-3.91-2.69-1.79-.41-3.62-.48-5.44-.25-.67.08-1.32.25-1.98.37ZM35.51,40.94c.24-.04.61-.09.98-.14.24-.03.29-.17.23-.37-.17-.56-.31-1.13-.53-1.68-.24-.6-.59-1.14-1.11-1.55-.56-.43-1.58-.5-2.06-.13-.91.7-1.03,1.88-.26,2.74.7.78,1.6,1.1,2.75,1.13ZM34.21,18.88c-.05-.2-.09-.48-.19-.74-.17-.42-.52-.54-.86-.25-.31.26-.6.59-.78.95-.49.97-.36,1.33.36,1.87.06.04.11.11.16.16.1.1.19.13.33.02.61-.5.92-1.14,1-2.01Z"/>
        </svg>        
        <a href="#landing" class="flex-1 text-4xl font-serif text-accent">Selonija</a>
        <div class="flex items-center space-x-1 text-stone-100 text-right">
            <a href="#about" class="px-1 hover:text-accent transition">Par Mums</a>
            <a href="#gallery" class="px-1 hover:text-accent transition">Galerija</a>
            <a href="#calendar" class="px-1 hover:text-accent transition">Kalendārs</a>
            <a href="#contacts" class="px-1 hover:text-accent transition">Kontakti</a>
            <a href="https://interna.selonija.lv/" class="flex items-center gap-2 px-3 py-1 bg-dark-accent hover:bg-accent transition rounded">
                <span>Biedriem</span>
                <img src="/assets/images/vairogs.png" alt="vairogs" class="h-5">
            </a>
        </div>
    </div>

    <!--Mobile-->
    <div class="w-full flex flex-col items-center justify-between md:hidden p-1">
        <div class="w-full flex items-center justify-between h-15">
            <a href="#landing" class="flex flex-row items-center">
                <svg class="h-12 text-accent" viewBox="0 0 64 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.56,22.05c-.02-1.32.23-2.57.64-3.8.69-2.03,1.76-3.78,3.55-5.03,1.42-.99,3.02-1.46,4.73-1.55,2.4-.12,4.71.23,6.87,1.34,1.75.9,3.01,2.25,3.49,4.21.37,1.51.2,2.98-.56,4.35-.73,1.32-1.83,2-3.36,2-1.53,0-3-.21-4.4-.86-.09-.04-.26-.03-.35.02-1.58,1.04-3.34,1.48-5.19,1.63-.34.03-.67.05-1.12.09.28.39.52.73.78,1.05.03.04.18.02.27,0,2.64-.93,5.34-1.07,8.08-.63,2.69.43,4.9,1.71,6.58,3.83,1.32,1.66,1.76,3.61,1.58,5.71-.03.36-.11.71-.14,1.07,0,.1.02.25.1.31,1.11.93,2.15,1.93,2.99,3.2.06-.25.13-.45.15-.64,0-.07-.06-.18-.13-.22-.72-.49-1.03-1.17-.88-2.01.14-.82.65-1.33,1.45-1.58.08-.02.18-.18.18-.28-.04-.86-.07-1.73-.15-2.59-.16-1.8-.34-3.6-.51-5.39-.29-3.12-.59-6.23-.88-9.35-.14-1.46-.3-2.92-.41-4.38-.04-.5.02-1.04.15-1.52.29-1.11,1.23-1.75,2.48-1.75,1.35,0,2.25.86,2.32,2.36.04.81-.08,1.63-.14,2.45-.18,2.25-.36,4.5-.56,6.74-.2,2.33-.41,4.67-.64,7-.21,2.1-.44,4.2-.67,6.3-.04.32.03.49.33.67.73.43,1.03,1.13.9,1.96-.13.82-.63,1.36-1.43,1.58-.25.07-.32.17-.34.42-.04.56-.11,1.11-.21,1.66-.07.37-.02.7.1,1.06.97,2.75,1.46,5.58,1.36,8.5-.11,2.92-.84,5.66-2.62,8.04-1.39,1.85-3.22,3.12-5.3,4.08-1.83.84-3.76,1.3-5.74,1.5-2.98.3-5.96.29-8.89-.51-2.54-.69-4.84-1.85-6.75-3.69-2.23-2.14-3.59-4.74-3.95-7.83-.25-2.17.03-4.26,1.12-6.19.22-.4.53-.75.77-1.14.09-.14.17-.34.14-.5-.23-1.29-.32-2.59-.24-3.89.29-5.01,2.16-9.23,6.17-12.39.02-.01.03-.03.07-.07-.63-.96-1.12-1.98-1.33-3.15-.59-.09-1.18-.17-1.77-.28-2.49-.46-4.88-1.2-6.96-2.71-1.68-1.21-2.81-2.79-3.18-4.87-.32-1.79.11-3.4,1.07-4.91,1.28-2.02,3.08-3.44,5.2-4.5,2.09-1.05,4.32-1.66,6.64-1.88,1.37-.13,2.75-.2,4.13-.21,1.75-.02,3.5-.01,5.25.1,1.73.11,3.46.3,5.18.56,1.72.26,3.4.7,5.12.94,2.11.31,4.2.18,6.16-.75,1.52-.73,2.55-1.87,2.79-3.6.07-.5.01-1.03,0-1.54,0-.13-.03-.25-.04-.38.04,0,.08-.01.13-.02.11.74.3,1.47.33,2.21.1,2.86-1.28,4.78-4.15,5.88-1.32.51-2.69.73-4.09.86-1.91.18-3.83.14-5.74-.01-1.54-.13-3.07-.33-4.6-.48-1.81-.18-3.61-.37-5.42-.48-1.46-.09-2.93-.13-4.4-.11-1.95.02-3.89.18-5.75.81-2.65.9-4.44,2.64-5.25,5.33-.23.76-.14,1.56.14,2.31.78,2.06,2.25,3.48,4.22,4.42,1.22.58,2.52.93,3.86,1.08.22.03.45,0,.71,0ZM19.07,46.57s-.08.04-.1.06c-.14.18-.28.37-.4.56-.84,1.27-1.28,2.66-1.19,4.18.1,1.65.64,3.16,1.54,4.54,1.56,2.39,3.76,4,6.34,5.12,1.58.69,3.23,1.13,4.93,1.41,2.09.34,4.19.46,6.28.21,3.36-.39,6.04-2.04,8.04-4.74,2.09-2.82,2.95-6.01,2.74-9.5-.02-.29-.07-.59-.11-.88-.04-.28-.09-.56-.14-.8-.55,1.16-1.06,2.34-1.65,3.48-1,1.91-2.27,3.61-3.93,5-2,1.69-4.31,2.61-6.92,2.71-.78.03-1.6.04-2.35-.15-1.22-.32-2.43-.72-3.58-1.24-4.2-1.86-7.32-4.84-9.15-9.1-.12-.29-.24-.58-.36-.88ZM30.11,52.56c.08-.06.14-.1.2-.15,1.28-1.08,2.44-2.26,3.47-3.58,1.11-1.42,2.04-2.95,2.47-4.73.14-.58.23-1.17.17-1.76-.62-.03-1.21-.04-1.8-.1-1.04-.11-2.01-.43-2.79-1.17-.99-.95-1.3-2.11-.91-3.42.34-1.14,1.08-1.96,2.28-2.15,1.38-.21,2.57.31,3.44,1.37.8.97,1.24,2.15,1.45,3.4.07.39.22.51.62.44.21-.04.44-.08.63-.18,1-.51,1.58-1.39,2.14-2.37-.63-.51-1.22-1.02-1.84-1.48-1.89-1.43-4.01-2.43-6.17-3.38-2.36-1.04-4.81-1.88-6.9-3.49-1.73,1.38-2.94,3.13-3.73,5.18-.86,2.21-1.11,4.5-.93,6.88.14-.02.24-.04.35-.06,1.4-.25,2.8-.31,4.2-.03,2.32.47,3.72,1.87,4.2,4.18.32,1.51.21,3.03-.08,4.53-.13.68-.31,1.35-.48,2.06ZM29.26,54.31c1.29.61,2.6,1.09,4,1.3,1.94.3,3.79.08,5.53-.85,1.86-1,3.19-2.53,4.29-4.28,1.31-2.08,2.13-4.37,2.74-6.73.03-.11-.01-.26-.08-.35-.67-.94-1.34-1.89-2.04-2.81-.35-.47-.77-.89-1.18-1.35-.1.15-.17.26-.25.37-1.04,1.43-2.14,2.76-4.12,2.81-.37,1.88-.73,2.89-1.53,4.25-1.41,2.39-3.31,4.34-5.41,6.11-.63.53-1.28,1.02-1.95,1.54ZM32.11,21.78c-.08-.06-.12-.09-.16-.13-.87-.65-1.23-1.53-1.05-2.59.23-1.4.84-2.27,2.05-2.62,1.19-.34,2.24.2,2.54,1.4.32,1.23-.01,2.33-.78,3.32-.18.24-.39.45-.6.69.07.04.11.06.15.08,1.34.67,2.78.83,4.25.7.71-.06,1.32-.39,1.76-.96.78-1.02.87-2.18.57-3.37-.54-2.15-1.97-3.53-3.95-4.39-1.63-.7-3.35-.9-5.1-.72-1.35.14-2.63.57-3.6,1.55-2.17,2.18-2.49,4.83-1.85,7.71,1.45.1,2.82.2,4.2.05.59-.06,1.12-.25,1.59-.74ZM28.3,53.67c.1-.12.2-.21.26-.32.19-.32.38-.64.53-.97.95-2.15.88-4.32-.02-6.45-.51-1.2-1.44-1.99-2.72-2.33-1.36-.36-2.66-.12-3.93.42-.08.03-.14.23-.12.33.49,2.07,1.32,3.99,2.54,5.74.95,1.36,2.07,2.54,3.45,3.58ZM30.5,27.78s-.02.1-.02.15c.86.43,1.7.88,2.57,1.3,2.98,1.42,5.9,2.95,8.65,4.8.29.19.57.39.88.61.19-1.54.02-2.97-.74-4.29-.87-1.51-2.27-2.31-3.91-2.69-1.79-.41-3.62-.48-5.44-.25-.67.08-1.32.25-1.98.37ZM35.51,40.94c.24-.04.61-.09.98-.14.24-.03.29-.17.23-.37-.17-.56-.31-1.13-.53-1.68-.24-.6-.59-1.14-1.11-1.55-.56-.43-1.58-.5-2.06-.13-.91.7-1.03,1.88-.26,2.74.7.78,1.6,1.1,2.75,1.13ZM34.21,18.88c-.05-.2-.09-.48-.19-.74-.17-.42-.52-.54-.86-.25-.31.26-.6.59-.78.95-.49.97-.36,1.33.36,1.87.06.04.11.11.16.16.1.1.19.13.33.02.61-.5.92-1.14,1-2.01Z"/>
                </svg>  
                <div class="text-accent font-serif text-3xl">Selonija</div>
            </a>
            
            <div class="flex flex-col gap-1 cursor-pointer pr-5" @click="showDropdown = ! showDropdown">
                <span class="w-7 h-0.5 bg-white"></span>
                <span class="w-7 h-0.5 bg-white"></span>
                <span class="w-7 h-0.5 bg-white"></span>
            </div>
        </div>
        <div x-show="showDropdown" class="w-full mt-2 text-stone-100 justify-start px-5">
            <ul>
                <li class="p-5 border-t border-t-stone-500 hover:text-accent"><a href="#about" @click="showDropdown = ! showDropdown">Par Mums</a></li>
                <li class="p-5 border-t border-t-stone-500 hover:text-accent"><a href="#gallery" @click="showDropdown = ! showDropdown">Galerija</a></li>
                <li class="p-5 border-t border-t-stone-500 hover:text-accent"><a href="#calendar" @click="showDropdown = ! showDropdown">Kalendārs</a></li>
                <li class="p-5 border-t border-t-stone-500 hover:text-accent"><a href="#contacts" @click="showDropdown = ! showDropdown">Kontakti</a></li>
                <li class="p-5 border-t border-t-stone-500 hover:text-accent"><a href="https://interna.selonija.lv/" @click="showDropdown = ! showDropdown">Biedriem</a></li>
            </ul>
        </div>
    </div>
</nav>
@endsection

@section('landing')
<div id="landing" class="p-8 h-[100vh] flex items-center relative">
    <div class="max-w-xl mx-auto text-stone-100 text-center z-20">
        <h2 class="float-center text-6xl p-8">Laipni lūgts <span class="text-accent">Selonijā</span></h2>
        <div class="text-stone-100">
            Studentu korporācija Selonija ir akadēmiska mūža brālība ar mērķi attītstīt un atbalstīt savas sabiedrības locekļus, audzinot tos goda, augstas pašapziņas un latvietības vērtībās, kas ir svarīgas brīvas Latvijas valsts izaugsmei un ilgtspējīgai, uz mērķi orientētai attīstībai. Selonija sastāv no Selonijas konventa un Filistru biedrības.
        </div>
    </div>
    <div class="absolute inset-0 bg-cover bg-center h-[100vh] brightness-50"
        style="background-image: url('/assets/images/slide1.jpg');">
    </div>
</div>
@endsection

@section('about')
<div x-data="{readMore: false}" id="about" class="pb-8 min-h-screen flex items-center justify-center">
    <div class="w-full sm:w-4/5 md:w-4/5 lg:w-2/3 items-center text-center">
        <img src="/assets/images/gerbonis.png" class="mx-auto mt-30" alt="gerbonis">
        <h1 class="p-5 text-4xl font-bold">Draugam, Tēvijai<br class="lg:hidden"><span class="pl-0 lg:pl-15 text-accent">Virtute et Fide</span></h1>
        <div class="pb-2">
            Selonija ir vecākā latviešu studentu korporācija Latvijā, tā ir dibināta 1880.gada 24.novembrī pie Rīgas Politehnikuma. Korporācijas dibināšanu noteica latviešu pieaugošā tieksme pēc neatkarības, pašapliecināšanās un latviskas identitātes. 19.gs. beigas iezīmē pārmaiņas sabiedrībā, latviešiem arvien vairāk apzinoties savas saknes un kopību, dibinot intelektuālas un komerciālas apvienības, ieņemot arvien augstāku stāvokli un vairojot savu turīgumu. Latviešu korporācijas dibināšana bija veids kā izrauties no līdz šim dominējošo vācbaltiešu aizbildniecības un aizspriedumiem, aizsākot pašiem savu ceļu. Selonijas dibinātāji bija Puriņu Klāva 1878.gadā dibinātā Draugu pulciņa dalībnieki, kuriem gadu vēlāk pievienojās 19 no vācu korporācijām Concordia Rigensis, Fraternitas Baltica, Rubonia un Borystenia izstājušies burši. To skaitā bija arī vairāki vācbaltieši.
        </div>
        <div x-show="readMore" class="space-y-2">
            <div>
                Pēc korporācijas dibināšanas bija nepieciešams iegūt oficiālu atzīšanu no jau eksistējošām vācbaltiešu korporācijām. Tikai šādi bija iespējams pilnvērtīgi iekļauties korporāciju sabiedriskajā dzīvē un veidot attiecības atbilstoši buršu principiem. Korporāciju nozīme Rīgas Politehnikumā šajā laikā bija ievērojami lielāka nekā mūsdienu Latvijas universitātēs un vairākums no studentiem bija korporāciju locekļi. Tomēr neskatoties uz vairākkārtīgiem Selonijas iesniegumiem, korporāciju apvienība Šaržēto Konvents (C!C!) 17 gadus atteicās atzīt latviešu korporāciju. Šāda stāvokļa sekas bija daudzās menzūras (attiecību atrisināšana paukojot), ko seloņi izcirta ar vācbaltiešu korporāciju locekļiem, kuri atteicās paciest seloņu eksistenci.
            </div>
            <div>
                Korporācijas oficiāla atzīšana C!C! nāca tikai 1897.gada 24.novembrī, kad būtiski bija mainījies gan C!C! sastāvs, gan situācija Rīgas Politehniskajā institūtā (RPI). C!C! tolaik bez vācu Fraternitas Baltica, Concordia Rigesis un Rubonia bija uzņemtas arī krievu Fraternitas Arctica un poļu Arconia un Veletia. Nevācu korporācijas atbalstīja Seloniju. Savukārt RPI studējošu skaits bija audzis tik ļoti, ka studējošie vairs nebija gatavi samierināties ar korporāciju ietekmi, šādā situācijā Selonijas atbalsts C!C! bija kļuvis noderīgs. Turklāt Rubonia vadībā bija nonācis latviešu izcelsmes seniors Renze, kura ietekmē balsu pārsvars C!C! balsojumā beidzot nosliecās Selonijas labā.
            </div>
            <h1 class="text-4xl font-bold p-5">
                Selonijas loma Latvijas neatkarības izcīnīšanā
            </h1>
            <div>
                Studējošie latvieši veidoja nākamo latviešu inteliģenci un viņiem bija ievērojama loma Latvijas valsts tapšanā. Līdz ar Pirmā pasaules kara kara sākumu un frontes pietuvošanos Rīgai Krievijas impērija 1915.gada rudenī evakuēja RPI uz Maskavu, kur līdz 1917.gada rudenim uzturējās arī Selonija. Kad gadu vēlāk Vācijas impērijas karaspēka joprojām kontrolētajā Rīgā agrākā RPI vietā tika nodibināta Baltishe Technishe Hochshule, tajā iestājās prāvs skaits komiltoņu un Selonijas konvents atsāka darbību Rīgā.
            </div>
            <div>
                Seloņi aktīvi piedalījās latviešu sabiedriskās dzīves organizēšanā, iesaistoties arī dažādās latviešu politiskajās apvienībās. Kad 1918.gada 18.novembrī tiek proklamēta Latvijas Republika (LR), Selonijas krustdēli iesaistās Nacionālā teātra apsargāšanā, kā arī uzvelk Latvijas karogus pie bijušās RPI ēkas galvenās ieejas. Seloņi piedalījās arī pašā proklamēšanas aktā, bet Selonijas filistrs Spricis Paegle kļūst par tirdzniecības un rūpniecības ministru pirmajā Latvijas valdībā.
            </div>
            <div>
                Jauno Latvijas Republiku tolaik apdraud spēki gan no austrumiem, gan rietumiem. Jau ar 1918.gada decembri Latvijā no austrumiem ar karaspēku ienāk komunistiskā Pētera Stučkas valdība un ātri pārņem kontrolē lielāko Latvijas daļu. LR spēki kopā ar vācbaltiešu vienībām atkāpjas uz Liepājas apvidu, kur fronti izdodas noturēt uz Ventas upes.
            </div>
            <div>
                1918.gada 29.novembrī Selonijas Ģenerālsapulcē nolemj, ka visiem aktīvajiem komiltoņiem jānododas Latvijas valdības apsardzības ministra rīcībā cīņai pret ienaidnieku. Līdzīgu lēmumu pieņem arī latviešu studentu korporācija Talavija un kopīgi tiek izveidota brīvprātīgo karaspēka vienība – atsevišķā studentu rota, kas ir tieši pakļauta Ģenerālā štāba priekšniekam. Vēlāk rotā iesaistās arī Lettonia, Lettgallia un Fraternitas Moscoviensis (kopš 1920.gada Fraternitas Lettica) locekļi, kā arī ārpus korporācijām esoši studenti. Par pirmo rotas komandieri tika ievēlēts Selonijas krustdēls kapteinis Nikolajs Grundmanis. Decembra beigās vienībā bija aptuveni 210 karavīri, bet 1919. gada 21. martā tā jau tiek pārformēta par atsevišķo studentu bataljonu. Ņemot vērā rotas kaujasspējas un augsto motivāciju, tā sākotnēji nodrošina apsardzi pagaidu valdībai, bet vēlāk tiek iesaistīta kaujās par Latvijas atbrīvošanu. Par varonību Latvijas atbrīvošanas cīņās 40 seloņi apbalvoti ar Lāčplēša kara ordeni.
            </div>
            <h1 class="text-4xl font-bold p-5">
                Selonija trimdā
            </h1>
            <div>
                Kad 1940.gada 17.jūnijā PSRS karaspēks okupē Latviju, tiek uzsākta valsts un sabiedrības institūciju iznīcināšana. Korporāciju darbība tiek ar pārtraukta, bet to īpašums konfiscēts, tiek apcietināti, deportēti vai nogalināti Latvijas valsts sabiedriskie, politiskie un militārie darbinieki. Vācijas okupācijas laikā korporāciju atjaunošana netiek atļauta un korporācija faktiski var darboties tikai pagrīdē. Neformālajās tikšanās reizēs biežs referents bija bijušais satiksmes ministrs, filistrs Bernhards Einbergs. Viņš iesaistījās arī uz neatkarības atjaunošanu vērstās Latvijas centrālās padomes darbībā, 1944. gadā Gestapo apcietināts, 1945. gadā Einbergs mira Štuthofas koncentrācijas nometnē.
            </div>
            <div>
                Atjaunot Selonijas dzīvi izdodas tikai trimdā. 1946.gada 31.augustā sanāksmē Eslingenā pie Nekaras, Vācijā, tika nodibināts Selonijas Apvienotais Konvents (S!A!K!), kas pārņēma Selonijas vadību trimdā. Latviešiem izplūstot pa plašo pasauli, Selonijas kopas tiek izveidotas vairākās ASV, Kanādas, Austrālijas pilsētās, Vācijā, Lielbritānijā, Zviedrijā un arī Venecuēlā. Kopš 1950.gada S!A!K! sēdes notika Ņujorkā.
            </div>
            <h1 class="text-4xl font-bold p-5">
                Darbības atjaunošana Latvijā
            </h1>
            <div>
                Līdz ar tautas atmodu un PSRS sabrukuma iesākumu, Selonijai 1989. gadā izdodas atjaunot darbību pie Rīgas Politehniskā institūta (tagadējās Rīgas Tehniskā universitātes). Tiek turpinātas sen iedzīvinātās Selonijas tradīcijas, caur patriotismu un godprātību veicinot katra sabiedrības locekļa un Latvijas izaugsmi kopumā. Selonijas komāna garanti ir Fraternitas Vesthardiana, Salgalia, Fraternitas Imantica, Gersicania, Fraternitas Vanenica un Vendia.
            </div>
        </div>
        <div class="p-5 cursor-pointer hover:underline text-accent" @click="readMore = ! readMore" x-text="readMore ? 'Lasīt mazāk' : 'Lasīt vairāk'">Lasīt vairāk</div>
        <div class="flex flex-col lg:flex-row justify-center items-center mt-6">
            <img src="/assets/images/cepure.png" class="mx-auto" alt="cepure">
            <img src="/assets/images/vairogs.png" class="mx-auto" alt="vairogs">
            <img src="/assets/images/auseklis.png" class="mx-auto" alt="auseklis">
            <img src="/assets/images/cirkelis.png" class="mx-auto" alt="cirkelis">
        </div>
    </div>
</div>
@endsection

@section('gallery')
<div x-data="{ filter: 'visas', selectedImage: null}" id="gallery" class="h-auto items-center">
    <h1 class="text-4xl font-bold p-5 text-center pt-30">Ieskats Selonijas dzīvē</h1>
    <div class="flex w-full justify-center space-x-3 lg:space-x-6 pt-11 uppercase font-bold text-sm lg:text-md">
        <span :class="filter === 'visas' ? 'text-accent' : ''"
              class="hover:text-accent transition cursor-pointer"
              @click="filter = 'visas'">visas</span>
        <span :class="filter === 'seli' ? 'text-accent' : ''"
              class="hover:text-accent transition cursor-pointer"
              @click="filter = 'seli'">sēļi</span>
        <span :class="filter === 'simboli' ? 'text-accent' : ''"
              class="hover:text-accent transition cursor-pointer"
              @click="filter = 'simboli'">simboli un vēsture</span>
        <span :class="filter === 'pasakumi' ? 'text-accent' : ''"
              class="hover:text-accent transition cursor-pointer"
              @click="filter = 'pasakumi'">pasākumi</span>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 pt-8">
        @foreach ($photos->sortBy('weight') as $photo)
            <div x-show="filter === 'visas' || '{{ $photo->tag }}' === filter" class="relative group"
                @click=" selectedImage = '{{ imager($photo->image, 1024) }}'">
                <img src="{{ imager($photo->image, 450) }}"
                        alt="{{ $photo->title ?? 'Selonijas galerijas attēls' }}"
                        class="w-full h-full object-cover grayscale-0 group-hover:grayscale cursor-pointer transition duration-600">
                <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition duration-600 cursor-pointer bg-neutral-800 bg-opacity-50">
                    <h1 class="text-accent text-xl font-bold text-center px-2 pb-2 py-1 rounded">{{ $photo->title }}</h1>
                    <span class="text-neutral-300 px-8 text-sm text-center">{{ $photo->description }}</span>
                </div>
            </div>
        @endforeach
    </div>

    <div x-show="selectedImage" class="fixed inset-0 flex items-center justify-center z-50" @click="selectedImage = null">
    <!--<div class="w-full h-full bg-bla boldck"></div>    -->
        <div class="absolute inset-0 flex items-center justify-center z-10 bg-black/85"><!-- @click.stop-->
            <div class="relative bg-white rounded-lg max-w-5xl max-h-[90vh] overflow-hidden w-11/12">
                <button @click="selectedImage = null" class="absolute top-4 right-4 bg-accent text-white px-3 py-1 rounded font-bold text-xl hover:bg-lime-700 z-10">×</button>
                <img :src="selectedImage" class="w-full h-auto object-contain max-w-[100%] max-h-[100%]" @click.stop>
            </div>
        </div>
    </div>

</div>
@endsection

@section('calendar')
    <div id="calendar" class="min-h-screen flex flex-col items-center justify-center pb-12">
        <h1 class="text-center font-bold text-4xl pt-30">Seko līdzi</h1>
        <div class="text-center text-xl pt-5 pb-8 text-accent font-bold">tuvākajiem pasākumiem Selonijā</div>
        <div class="max-w-7xl w-full " x-data="fullCalendar">
            <div x-ref="calendar"></div>
        </div>
    </div>
@endsection

@section('contacts')
<div id="contacts" class="flex flex-col items-center justify-center bg-neutral-800">
    <h1 class="text-center font-bold text-4xl pt-25 text-white">Amatpersonas</h1>
    <span class="text-center text-xl text-accent font-bold pt-3">Selonijas prezidijs</span>
    <div class="w-full sm:w-4/5 md:w-4/5 lg:w-2/3 pb-25">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 pl-1 pr-1 pt-8">
            @foreach ($prezidijs->sortBy('weight') as $amatpersona)
                    <div class="relative group">
                        <div>
                            <img src="{{ imager($amatpersona->image, 410) }}"
                                alt="{{ $amatpersona->title ?? 'Selonijas galerijas attēls' }}"
                                class="w-full h-full object-cover grayscale-0 group-hover:grayscale transition duration-600">
                        </div>
                        <span class="absolute inset-x-0 bottom-8 flex flex-col items-center justify-center font-bold text-l text-accent group-hover:hidden">{{ $amatpersona->name }}</span>
                        <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-80 transition duration-300 bg-neutral-800 bg-opacity-50">
                            <h1 class="text-accent text-xl font-bold text-center px-2 py-1 rounded pb-23 mt-auto">{{ $amatpersona->title }}</h1>
                        </div>
                    </div>
                
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('facebook-embed')
<div class="pt-25 pb-25 w-full">
    <h1 class="text-center text-4xl font-bold pb-8">Seko līdzi Facebook</h1>
    <div class="flex justify-center items-center">
        <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/Selonija/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Selonija/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Selonija/">Selonija</a></blockquote></div>    
    </div>
</div>
@endsection

@section('map')
<div class="bg-neutral-800">
    <!-- Contact info -->
    <div class="flex items-center justify-center">
        <div class="
                w-full sm:w-4/5 md:w-4/5 lg:w-2/3 items-center text-stone-300
                flex justify-evenly py-20 max-md:flex-col gap-10
                ">
                <div class="flex gap-4 items-center">
                        <i data-lucide="mail" class="size-[60px] text-accent stroke-1"></i>
                        <a class="text-accent" data-mailto="{{ base64_encode(base64_encode('prezidijs@selonija.lv')) }}"></a>
                </div>
                <div class="flex gap-4 items-center">
                        <i data-lucide="map-pin" class="size-[60px] text-accent stroke-1"></i>
                        <div>
                            <p class="whitespace-nowrap">Stabu iela 17</p>
                            <p>Rīga</p>
                        </div>
                </div>
                <div class="flex gap-4 items-center">
                        <i data-lucide="phone" class="size-[60px] text-accent stroke-1"></i>
                        <div>Telefons: <span class="whitespace-nowrap">(+371) 6727-3303</span></div>
                </div>
        </div>
    </div>
    <!-- Contact admin form -->
    <form method="POST" name="admin" netlify data-netlify-recaptcha="true"
        class="mx-auto mt-0 max-w-2xl px-4 py-10 flex flex-col gap-4"
        >
        <h1 class="text-4xl text-accent font-serif pb-10 text-center">Nodod ziņu administratoram:</h1>
        <div class="flex gap-4 max-sm:flex-col">
            <input type="text" name="name" placeholder="Vārds *"
                   class="p-3 flex-1 bg-white text-black rounded outline-none focus:ring-3 focus:ring-accent" required>
            <input type="text" name="email" placeholder="Epasts *"
                   class="p-3 flex-1 bg-white text-black rounded outline-none focus:ring-3 focus:ring-accent" required>
        </div>
        <textarea name="message" placeholder="Ziņa *"
                  class="w-full min-h-20 p-3 flex-1 bg-white text-black rounded outline-none focus:ring-3 focus:ring-accent" required>

        </textarea>
        <div class="flex max-sm:flex-col justify-between items-center gap-4">
            <div data-netlify-recaptcha="true"></div>
            <button type="submit" class="bg-dark-accent text-white font-bold px-10 py-3 rounded hover:bg-accent transition cursor-pointer">
                Nosūtīt ziņu
            </button>
        </div>
    </form>
    <!-- Google map -->
    <gmp-map
            center="56.957755,24.1258373"
            zoom="15"
            map-id="f91852acc9527315f7c8412d"
            style="height: 500px">
        <gmp-advanced-marker
                position="56.957755,24.1258373"
                title="Selonija"
                anchor-top="-50%">
            <img src="/assets/images/vcfs_brand_green.png">
        </gmp-advanced-marker>
    </gmp-map>
    <!-- Footer -->
    <div class="flex flex-col items-center justify-center text-stone-300">
        <div class="w-full sm:w-4/5 md:w-4/5 lg:w-2/3 items-center">
            <div class="grid grid-cols-1 lg:grid-cols-2 h-auto pt-12 pb-10">
                <div class="text-center lg:text-left flex flex-col">
                    <div class="flex gap-4 pb-2 justify-center lg:justify-start">
                        <a href="https://x.com/selonija" alt="Twitter" class="h-10 w-10 text-accent flex justify-center items-center border-2 rounded-full">
                            <i data-lucide="twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/Selonija/" alt="Facebook" class="h-10 w-10 text-accent flex justify-center items-center border-2 rounded-full">
                            <i data-lucide="facebook"></i>
                        </a>
                        <a href="http://www.pk.lv/">
                            <img src="/assets/images/pk.png" alt="PK logo" class="h-10">
                        </a>
                        <a href="http://www.spk.lv/">
                            <img src="/assets/images/spk.png" alt="SPK logo" class="h-10">
                        </a>
                    </div>
                    <a class="text-accent pb-2" href="/privacy-policy">Privacy Policy</a>
                    <a class="text-accent" href="/terms-of-service">Terms of Service</a>
                </div>
                <div class="text-center lg:text-right">
                    <div class="pb-6">
                        STUDENTU KORPORĀCIJA SELONIJA BIEDRĪBA<br>
                        Reģ. Nr.:40008181369<br>
                        LV29HABA0551036152947<br>
                        Swedbank: HABALV22<br>
                        <a class="text-accent" data-mailto="{{ base64_encode(base64_encode('prezidijs@selonija.lv')) }}"></a>
                    </div>
                    <div>
                        KORPORĀCIJAS SELONIJA FILISTRU PALĪDZĪBAS BIEDRĪBA<br>
                        Reģ. Nr.: 50008005671<br>
                        LV34HABA0551026002874<br>
                        Swedbank: HABALV22<br>
                        <a class="text-accent" data-mailto="{{ base64_encode(base64_encode('valde@selonija.lv')) }}"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-4/5 md:w-4/5 lg:w-2/3 items-center" x-data="{ currentYear: new Date().getFullYear() }">
            <div class="w-full text-center p-10 border-t border-t-stone-300"><span class="font-serif font-bold text-accent">Selonija</span> © 1880-<span x-text="currentYear"></span>. Visas tiesības aizsargātas.</div>
        </div>
    </div>
</div>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-62276173-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', ['UA','62276173','1'].join('-'));
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcTbxBGNJQ0qOUh6QaOvnTm-rx26O_v9U&libraries=maps,marker&v=weekly" defer></script>
@endsection



@section('tester')
<div class="h-[100vh]">
    <div>testetsetst</div>
</div>
@endsection