const chatbox = document.getElementById('chatbox');
//Ha nem tetszik nyugodtan változtassatok rajta, de légyszíves ne töröljétek ki :)
function appendMessage(message, sender) {
    document.getElementById('chatbox').style.display = 'block'
    const div = document.createElement('div');
    div.className = `p-2 rounded-md ${sender === 'user' ? 'bg-blue-100 text-right' : 'bg-gray-100 text-left'}`;
    div.textContent = message;
    chatbox.appendChild(div);
    chatbox.scrollTop = chatbox.scrollHeight;
}

async function sendMessage() {
    const input = document.getElementById('userMessage');
    const userMessage = input.value.trim();

    if (userMessage === '') return;

    // Felhasználó üzenet overlay
    appendMessage(userMessage, 'user');
    input.value = '';

    try {
        // Laravel API végpont
        const response = await axios.post('/chatbot', { message: userMessage });
        console.log(response)
        appendMessage(response.data.response.candidates[0].content.parts[0].text, 'bot');
    } catch (error) {
        appendMessage('Error: Could not connect to chatbot.', 'bot');
    }
}

function openChatbox(){
    document.getElementById('chatbot_wrapper').style.display = 'block'
}

function closeChatbox() {
    document.getElementById('chatbot_wrapper').style.display = 'none'
}

function initChatbot() {
    document.getElementById('chatbot_button').addEventListener('click', sendMessage)
    document.getElementById('open_chatbot').addEventListener('click', openChatbox)
    document.getElementById('close_chatbot').addEventListener('click', closeChatbox)
    appendMessage("Hi! \n How can I assist you today?", 'bot')
}

export default initChatbot