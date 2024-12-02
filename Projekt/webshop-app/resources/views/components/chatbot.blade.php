<div id="chatbot_wrapper" class="fixed bottom-4 left-4 w-full max-w-md bg-slate-100 rounded-lg shadow-lg p-6 z-40" style="display:none;">
    <div style="width:100%; height: 100%;" class="relative">
        <button
            id="close_chatbot"
            class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 focus:outline-none"
            >X</button>
            <h1 class="text-xl font-bold text-center text-gray-700 mb-4">Chatbot</h1>
            <div id="chatbox" class="space-y-3 max-h-96 overflow-y-auto border border-gray-300 rounded p-3" style="display:none;">
            </div>
            <div class="mt-4 flex">
                <input
                    type="text"
                    id="userMessage"
                    placeholder="Type your message..."
                    class="flex-1 border border-gray-300 rounded p-2 focus:ring focus:outline-none" />
                <button
                    id="chatbot_button"
                    class="ml-2 px-4 py-2 text-white rounded bg-slate-500 hover:bg-slate-600">
                    Send
                </button>
            </div>
    </div>
</div>
<button id="open_chatbot" class="fixed bottom-4 left-4 bg-slate-500 hover:bg-slate-600 rounded-lg shadow-lg p-6"><i class="fa-solid fa-headset" style="color:white;"></i></button>