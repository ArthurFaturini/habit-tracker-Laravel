<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">
            <h1 class="font-bold text-2xl">
                Registre-se
            </h1>

            <p>
                Preencha as informações para cadastrar seus hábitos
            </p>
            <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col">
                @csrf
                <div class="flex flex-col gap-2 mb-2">
                    <label for="name">Nome</label>
                    <input class="bg-white p-2 border-2 @error('name') border-red-500 @enderror" type="text"
                        name="name" placeholder="Seu nome">
                    @error('name')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mb-2">
                    <label for="email">Email</label>
                    <input class="bg-white p-2 border-2 @error('email') border-red-500 @enderror" type="text"
                        name="email" placeholder="your@email.com">
                    @error('email')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mb-2">
                    <label for="password">Password</label>
                    <input class="bg-white p-2 border-2 @error('password') border-red-500 @enderror" type="password"
                        name="password" placeholder="********">
                    @error('password')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2 mb-2">
                    <label for="password_confirmation">Repita a sua senha</label>
                    <input class="bg-white p-2 border-2 @error('password') border-red-500 @enderror" type="password"
                        name="password_confirmation" placeholder="********">
                    @error('password')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <button class="bg-white border-2 p-2" type="submit">Cadastrar</button>
            </form>
            <p class="text-center mt-2">
                Já tem uma conta?
                <a class="underline hover:opacity-50 transition" href="{{ route('site.login') }}">Faça login</a>
            </p>
        </section>
    </main>
</x-layout>
