Project Overview

This project demonstrates how a SQL Injection vulnerability can occur in a web application due to improper handling of user input, how an attacker can exploit it, and how the issue can be fixed using secure coding practices.

The application was built using Laravel and intentionally included an insecure search feature to simulate a real-world vulnerability commonly found in production systems.

Goal: understand both attacker mindset and defender mitigation in application security.

Tech Stack
Laravel (PHP)
MySQL / MariaDB
Blade Templates
Git & GitHub
OWASP principles

Application Feature
The application includes a user search functionality:
Users can search for registered users by name
Intended behavior: return results only when a valid keyword is provided

Verification After Fix
Normal search works as expected
The same SQL injection payload no longer works
Malicious input is treated strictly as text
This confirms the vulnerability has been properly mitigated.

Key Security Lessons Learned
SQL Injection is about logic manipulation, not random symbols
Business logic flaws can hide serious vulnerabilities
User input must never be trusted
Secure frameworks are only effective when used correctly
Always re-test with the same attack payload after applying a fix

uture Improvements
Add XSS vulnerability and mitigation
Implement authentication-based access control testing
Add logging and monitoring for suspicious queries
Expand into a full OWASP Top 10 lab
