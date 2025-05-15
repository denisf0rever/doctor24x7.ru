@extends('chat')
@section('title', 'Чат')
@section('description', 'Консультация врача')

@section('content')
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/11.7.3/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/11.7.3/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyBAItTdxiqkHWosXvnE3w4Rfn74DX1uHlg",
  authDomain: "chat-cf5dc.firebaseapp.com",
  projectId: "chat-cf5dc",
  storageBucket: "chat-cf5dc.firebasestorage.app",
  messagingSenderId: "219025526892",
  appId: "1:219025526892:web:f8985563a67bc780c24849",
  measurementId: "G-C0PWBH2HDL"
};

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  
  
</script>

<div id="chat-container">
  <div id="messages"></div>
  <input type="text" id="message-input" placeholder="Введите сообщение">
  <button id="send-button">Отправить</button>
</div>
@endsection