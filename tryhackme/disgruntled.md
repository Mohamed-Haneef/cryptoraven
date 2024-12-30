---
description: >-
  Use your Linux forensics knowledge to investigate an incident. [challenge
  level - easy]
---

# Disgruntled

## Task 1: Introduction

Start the machine and we are good to go, I'll be connecting with ssh with the given credentials.

## Task 2: Linux Forensics review

We got a cheat sheet for linux forensics, reading it is recommended.

## Task 3 : Nothing suspicious... So far

Here comes the main part, let's start of by checking all the available users.

Since we are the root, we might be able to gather more information in the initial recon state,

Checking the `.bash_history` files of the users could reveal tons of information.

let's start of by checking the available users

<figure><img src="../.gitbook/assets/Screenshot From 2024-12-30 21-54-35.png" alt=""><figcaption></figcaption></figure>

As we can see there are 3 users.

**Q1: The user installed a package on the machine using elevated privileges. According to the logs, what is the full COMMAND?**

Ok let's dive on to the question, we can check the apt logs to see all the installed packages.

You can see the list of apt installed at **/var/log/apt/history.log** to get all the apt install logs

Command used

**cat /var/log/apt/history.log**

<figure><img src="../.gitbook/assets/Untitled Project (6).jpg" alt=""><figcaption></figcaption></figure>

There we go, we got the package which was used to elevate the privileges and the user who installed it.

Give the answer in the format /usr/bin/apt install \<package-name>

**Q2: What was the present working directory (PWD) when the previous command was run?**

The place where the package was downloaded was from the home page of the user found above.

## Task 3: Let’s see if you did anything bad

Okk let's go to the home page and check the `bash_history` of the user cyber&#x74;**.**

**Q1: Which user was created after the package from the previous task was installed?**

<figure><img src="../.gitbook/assets/Untitled Project (7).jpg" alt=""><figcaption></figcaption></figure>

We got the user created by the user cybert, seems like cybert was the account where the hacking took place.

**Q2: A user was then later given sudo priveleges. When was the sudoers file updated? (Format: Month Day HH:MM:SS)**

let's go to the new user account and check their `.bash_history`&#x20;

&#x20;
