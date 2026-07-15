<x-layout>
    <main class="py-10">
        <h1>
            Faça Login
        </h1>

        <section>
            <form action="/login" method="POST">
                @csrf
                <input class="bg-white p-2 border-2" type="email" name="email" id="email"
                    placeholder="your@email.com">
                <input class="bg-white p-2 border-2" type="password" name="password" id="password"
                    placeholder="********">
                <button class="bg-white border-2 p-2" type="submit">Entrar</button>
            </form>

            <div>
                @error('email')
                    <p class="text-red-500 text-x1 mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </section>
    </main>
</x-layout>
