#  <img src="public/favicon.svg" style="height: 30px; margin-right: 10px;"> Deployment Guide for ronhedwigzape.com

This guide outlines the steps I use to deploy ronhedwigzape.com using GitHub and Hostinger. I follow these instructions to ensure my project is set up correctly on my Hostinger account.

---

## Prerequisites

- **GitHub Repository:** My project is hosted on GitHub.
- **Webhook Setup:** I have configured a webhook so that commits I push to GitHub automatically update the files on Hostinger.
- **Hostinger Access:** I have access to Hostinger's File Manager.

---

## Deployment Steps

1. **Commit and Push Changes**
    - I commit my changes locally.
    - I push the commits to my GitHub repository.
    - Once pushed, the webhook triggers, and the files are copied to Hostinger's File Manager.

2. **Locate the Deployed Files**
    - In Hostinger's File Manager, I navigate to:
      ```
      /files/public_html/hp_site/
      ```
    - This folder contains the files that were pushed from GitHub.

3. **Move Files to the Project Directory**
    - I move all files from the `/files/public_html/hp_site/` directory to the `/files/` directory.

4. **Update Laravel Configuration**
    - I open the file located at:
      ```
      /bootstrap/app.php
      ```
    - I find the following line:
      ```php
      // $app->usePublicPath($app->basePath('public_html'));
      ```
    - I uncomment the line by removing the `//`:
      ```php
      $app->usePublicPath($app->basePath('public_html'));
      ```
    - I save the file.
    - This step configures Laravel to use `/files/public_html` as the public path.

---

## Additional Notes

- **Directory Structure on Hostinger:**
    - My **project files** reside in the `/files/` directory.
    - The **built (public) files** are located in the `/files/public_html/` directory.
- After moving the files and updating the configuration, I verify that ronhedwigzape.com loads as expected.

---
