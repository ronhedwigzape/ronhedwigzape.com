# Deployment Guide for ronhedwigzape.com

This guide outlines the steps to deploy your website using GitHub and Hostinger. Follow these instructions to ensure your project is set up correctly.

---

## Prerequisites

- **GitHub Repository:** Your project should be hosted on GitHub.
- **Webhook Setup:** Ensure a webhook is configured so that commits pushed to GitHub automatically update files on Hostinger.
- **Hostinger Access:** You must have access to Hostinger's File Manager.

---

## Deployment Steps

1. **Commit and Push Changes**
    - Commit your changes locally.
    - Push the commits to your GitHub repository.
    - Once pushed, the webhook will trigger, and the files will be copied to Hostinger's File Manager.

2. **Locate the Deployed Files**
    - In Hostinger's File Manager, navigate to:
      ```
      /files/public_html/hp_site/
      ```
    - This folder contains the files that were pushed from GitHub.

3. **Move Files to the Project Directory**
    - Move all files from the `/files/public_html/hp_site/` directory to the `/files/` directory.

4. **Update Laravel Configuration**
    - Open the file located at:
      ```
      /bootstrap/app.php
      ```
    - Find the following line:
      ```php
      // $app->usePublicPath($app->basePath('public_html'));
      ```
    - Uncomment the line by removing the `//`:
      ```php
      $app->usePublicPath($app->basePath('public_html'));
      ```
    - Save the file.
    - This step configures Laravel to use `/files/public_html` as the public path.

---

## Additional Notes

- **Directory Structure on Hostinger:**
    - The **project files** reside in the `/files/` directory.
    - The **built (public) files** are located in the `/files/public_html/` directory.
- Ensure that after moving the files and updating the configuration, your website loads as expected.

---

## Conclusion

By following these steps, your deployment process for [ronhedwigzape.com](https://ronhedwigzape.com/) should be smooth. If you encounter any issues, verify each step or consult Hostinger's support resources.

Happy Coding!
