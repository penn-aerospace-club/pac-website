# assets/

This folder is empty on purpose — I can't download files from your live
site into this environment. Add these files here before you deploy
(the templates already reference these exact filenames):

| Filename | What it is | Grab it from |
|---|---|---|
| `logo.png` | Your club logo (used in nav + footer) | Your current site: `wp-content/uploads/2025/07/cropped-cropped-FullLogo-2-1.png` |
| `hero-bg.jpg` | Hero background image | Your current site: `wp-content/uploads/2020/08/cropped-MilkyWaySpitzer-scaled-1.jpg` |
| `mission-rocketry.jpg` | Rocketry team photo | Your current site: `wp-content/uploads/2025/03/CYL_3197-scaled.jpg` |
| `mission-balloon.jpg` | Balloon team photo | Your current site: `wp-content/uploads/2025/03/CYL_3246-scaled.jpg` |
| `mission-jet.jpg` | Jet propulsion photo | Your current site: `wp-content/uploads/2025/08/Screenshot-2025-08-13-at-14.25.17.png` |
| `mission-aircraft.jpg` | Aircraft team photo | Your current site: `wp-content/uploads/2025/08/IMG_4544-scaled.jpg` |

Also add, in the **theme root** (not this folder):

| Filename | What it is |
|---|---|
| `screenshot.png` | 1200×900 (or similar 4:3) screenshot of the homepage — this is what shows up as the theme thumbnail in Appearance → Themes. Just screenshot the finished site once it's live. |

Longer term: move logo/photos into the WordPress Media Library instead of
hardcoding file paths, so future officers can swap them without touching
code. `header.php` has a comment showing where to switch the logo to
`get_custom_logo()` once you've set a Site Identity logo in the Customizer.
