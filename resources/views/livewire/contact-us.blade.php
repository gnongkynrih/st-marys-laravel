<div class="bg-purple-400 p-2 w-full md:w-4xl md:p-6 mx-auto">
    <h1>Contact Us</h1>
    <form class="flex flex-col gap-4">
        <x-input
            label="Name"
            placeholder="Enter your name"
        />

        <x-input
            type="email"
            label="Email"
            placeholder="email@example.com"
        />
        <x-textarea label="Message" />

        <x-button light label="Submit" class="bg-green-500" />
    </form>
</div>
