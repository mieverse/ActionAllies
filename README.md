# Action Allies — NGO Database & Donation Management System

> **CSE370: Database Systems** | BRAC University | Fall 2025  
> Group 07 | Lab Section 23

---

## 👥 Team Members

| # | Name | Student ID | Modules |
|---|------|------------|---------|
| 1 | Anindita Mahjabin Sristy | 23201073 | Sponsorship, Past Projects, Add Project |
| 2 | Tasmiah Ahmed | 23201517 | Homepage, Donation system, Admin dashboard |
| 3 | Karib Fiyaz | 23201612 | Login/Logout, Feedback, Add Collaborator |
| 4 | Zafra Musarrat Islam | 23241010 | Join NGO, Sister NGO list, Add Member |

---

## Overview

**Action Allies** is a full-stack web application designed to manage the operations of a non-profit organization. Built with PHP and MySQL, the system supports role-based access for admins, members, and guests — enabling transparent donation tracking, sponsorship management, member administration, project records, and NGO collaboration.

The database is fully normalized to **Third Normal Form (3NF)**, ensuring data consistency and minimal redundancy.

---

## Features

### 👤 Guest Access
- Browse homepage, view projects, sister NGOs, and members
- Submit donations via **bKash** or **Nagad**
- Apply to join the NGO through a structured 3-step signup process
- Submit anonymous feedback

### 🔐 Admin Access
- Secure login with session-based authentication
- Track and manage donation records
- Add/manage members, projects, collaborators (sister NGOs)
- Full dashboard with role-restricted controls

### 🤝 NGO Management
- Manage sister NGO (collaborator) partnerships
- Track past and ongoing projects with dates and statuses
- Sponsorship submission and tracking

---

## Tech Stack

![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white)
![HTML](https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)

| Layer | Technology |
|---|---|
| Frontend | HTML, CSS |
| Backend | PHP |
| Database | MySQL (via phpMyAdmin) |
| Auth | Session-based role management |

---

## Database Design

- **ER/EER Diagram** — entity relationships mapped across all modules
- **Schema** — normalized relational schema
- **Normalization** — verified 1NF → 2NF → 3NF (no partial or transitive dependencies)

**Key tables include:** `applicants`, `members`, `admins`, `donors`, `sponsors`, `validprojects`, `validsisters`, `feedback`

---

## Repository Structure

```
📦 project370/
 ┣ 📄 index.php              # Homepage (guest/admin view)
 ┣ 📄 dbconnects.php         # Database connection
 ┣ 📄 viewmembers.php        # Current members list
 ┣ 📄 viewprojects.php       # Past & ongoing projects
 ┣ 📄 viewsisters.php        # Sister NGO list
 ┣ 📂 admin/
 ┃ ┣ 📄 adminindex.php       # Admin dashboard
 ┃ ┣ 📄 addmember.php        # Add new member
 ┃ ┣ 📄 addproject.php       # Add new project
 ┃ ┗ 📄 addsister.php        # Add sister NGO
 ┣ 📂 login/
 ┃ ┣ 📄 login.php            # Admin login page
 ┃ ┣ 📄 loginprocess.php     # Auth logic
 ┃ ┗ 📄 logout.php           # Session destroy
 ┣ 📂 donation/
 ┃ ┣ 📄 donate.php           # Donation form
 ┃ ┗ 📄 donateprocess.php    # Donation backend
 ┣ 📂 sponsorship/
 ┃ ┣ 📄 sponsor.php          # Sponsorship form
 ┃ ┗ 📄 sponsorprocess.php   # Sponsorship backend
 ┣ 📂 feedback/
 ┃ ┣ 📄 fb.php               # Feedback form
 ┃ ┗ 📄 fbprocess.php        # Feedback backend
 ┣ 📂 joinAA/
 ┃ ┣ 📄 signup1.php          # Step 1: Personal info
 ┃ ┣ 📄 signup2.php          # Step 2: Department selection
 ┃ ┣ 📄 signup3.php          # Step 3: Motivation
 ┃ ┣ 📄 success.php          # Confirmation page
 ┃ ┗ 📄 signup[1-3]process.php  # Backend for each step
 ┗ 📂 elements/
   ┣ 📄 style.css
   ┣ 📄 index.css
   ┗ 📂 background/          # UI background images
```

---

## How to Run Locally

> Requires: **XAMPP** (Apache + PHP + MySQL) or any local PHP server

```bash
# 1. Clone the repository
git clone https://github.com/YOURUSERNAME/ActionAllies.git

# 2. Move project folder to XAMPP's htdocs
# Place the project370/ folder inside your htdocs directory

# 3. Import the database
# Open phpMyAdmin → Create a new database → Import the SQL schema

# 4. Configure DB connection
# Edit dbconnects.php with your local credentials

# 5. Run in browser
# http://localhost/project370/home.php
```

> **Note:** This project was developed and tested using XAMPP with phpMyAdmin.
> A live demo is not currently hosted. See the project report for full database schema and ER diagram details.

---
