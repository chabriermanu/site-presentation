import {openModal} from "./modal.js"
import { speak, stopSpeaking } from './speech.js';
const page1 = document.querySelector('#page1');
const page2 = document.querySelector('#page2');

document.querySelectorAll('img').forEach(img => {
  img.addEventListener('mouseover', () => {
    const text = img.dataset.desc;
    if (text) speak(text);
  });

  img.addEventListener('mouseout', () => {
    stopSpeaking();
  });

  img.addEventListener('click', () => {
    const target = img.dataset.target;
    if (target) openModal(target);
  });
});


document.querySelector('#btnVersAvantages').addEventListener('click', () => {
    page1.classList.add('hidden');
    page2.classList.remove('hidden');
});

document.querySelector('#btnVersHistoire').addEventListener('click', () => {
    page2.classList.add('hidden');
    page1.classList.remove('hidden');
});

