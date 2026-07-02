<?php
function WelcomeStudent()
{
    echo "Welcome Student!";
}
if (function_exists("WelcomeStudent"))
{
    WelcomeStudent();
}
else
{
    echo "Error: Function deos not exist.";
}