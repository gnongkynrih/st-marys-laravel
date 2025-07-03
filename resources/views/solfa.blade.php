<!-- resources/views/solfa.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Tonic Sol-fa App</title>
    <script src="https://unpkg.com/tone@14.7.77/build/Tone.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl mb-4">Tonic Sol-fa Sound Generator</h1>
        <div class="mb-4">
            <label for="key-select" class="mr-2">Select Key:</label>
            <select id="key-select" class="border rounded p-1">
                <option value="C">C Major</option>
                <option value="G">G Major</option>
                <option value="D">D Major</option>
                <!-- Add more keys as needed -->
            </select>
        </div>
        <div class="flex flex-wrap gap-4">
            <button onclick="playSolfa('do')" class="bg-blue-500 text-white px-4 py-2 rounded">Do</button>
            <button onclick="playSolfa('re')" class="bg-blue-500 text-white px-4 py-2 rounded">Re</button>
            <button onclick="playSolfa('mi')" class="bg-blue-500 text-white px-4 py-2 rounded">Mi</button>
            <button onclick="playSolfa('fa')" class="bg-blue-500 text-white px-4 py-2 rounded">Fa</button>
            <button onclick="playSolfa('so')" class="bg-blue-500 text-white px-4 py-2 rounded">So</button>
            <button onclick="playSolfa('la')" class="bg-blue-500 text-white px-4 py-2 rounded">La</button>
            <button onclick="playSolfa('ti')" class="bg-blue-500 text-white px-4 py-2 rounded">Ti</button>
        </div>
    </div>
    <script>
        // Initialize Tone.js synthesizer
        const synth = new Tone.Synth().toDestination();

        // Major scale notes for each key (starting at the 4th octave)
        const scales = {
            'C': ['C4', 'D4', 'E4', 'F4', 'G4', 'A4', 'B4'],
            'G': ['G4', 'A4', 'B4', 'C5', 'D5', 'E5', 'F#5'],
            'D': ['D4', 'E4', 'F#4', 'G4', 'A4', 'B4', 'C#5'],
            // Add more keys (e.g., A, E, F, etc.) with their major scale notes
        };

        // Solfege to scale degree mapping
        const solfaMap = {
            'do': 0,
            're': 1,
            'mi': 2,
            'fa': 3,
            'so': 4,
            'la': 5,
            'ti': 6
        };

        // Function to play a solfege note in the selected key
        function playSolfa(solfa) {
            const key = document.getElementById('key-select').value;
            const notes = scales[key] || scales['C']; // Default to C major
            const note = notes[solfaMap[solfa]];
            if (note) {
                synth.triggerAttackRelease(note, "8n");
            }
        }

        // Update key selection dynamically
        document.getElementById('key-select').addEventListener('change', function() {
            console.log('Key changed to: ' + this.value);
        });
    </script>
</body>
</html>