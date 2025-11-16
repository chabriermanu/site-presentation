export function speak(text) {
    const utterance = new SpeechSynthesisUtterance(text);
    utterance.lang = "fr-FR";
    utterance.rate = 1;
    speechSynthesis.speak(utterance);
}

export function stopSpeaking() {
    speechSynthesis.cancel();
}