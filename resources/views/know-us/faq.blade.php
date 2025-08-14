@extends('includes.inc')
@section('content')
//faq page
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Frequently Asked Questions</h1>
            <p>Here you can find answers to the most common questions.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ul class="faq-list">
                <li>
                    <h3>Question 1: What is this website about?</h3>
                    <p>Answer: This website provides information and resources on various topics.</p>
                </li>
                <li>
                    <h3>Question 2: How can I contact support?</h3>
                    <p>Answer: You can contact support via the contact form on our website.</p>
                </li>
                <!-- Add more FAQs as needed -->
                <li>
                    <h3>Question 3: Where can I find the terms of service?</h3>
                    <p>Answer: The terms of service can be found in the footer of the website.</p>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection