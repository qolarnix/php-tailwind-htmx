<?php declare(strict_types=1);

get_template('header');
?>

<section class="py-24 px-6">
    <div class="container mx-auto">
        <h1 class="font-bold text-4xl md:text-5xl text-white !leading-snug mb-6">
            Lorem ipsum dolor sit amet <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-600">Gradient text</span>
        </h1>

        <p class="mb-10 text-lg text-zinc-200 leading-8">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas deserunt eveniet debitis aspernatur obcaecati! Nihil cumque necessitatibus reprehenderit repudiandae dignissimos iusto culpa odit dicta tempore! Soluta dicta quis recusandae enim.
        </p>

        <a href="#" class="inline-block">
            <div class="bg-gradient-to-r from-blue-400 to-indigo-600 rounded-md p-0.5">
                <div class="bg-zinc-900 w-full h-full rounded-md py-3 px-7 transition-all hover:bg-zinc-950 hover:shadow-xl hover:shadow-blue-500/20">
                    <span class="text-white text-base">Get Started</span>
                </div>
            </div>
        </a>
    </div>
</section>




<?php
get_template('footer');