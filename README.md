# Aerospace Club at Penn — Website Theme

Custom WordPress theme for `aerospaceclub.seas.upenn.edu`. Plain HTML/CSS/JS
templated through WordPress — no page builder, no purchased theme.

## What's in here

```
pac-theme/
├── style.css        theme header + all CSS (design tokens live at the top)
├── functions.php    theme setup, nav menu, enqueue scripts/styles, custom nav walker
├── header.php        <head> + top nav
├── footer.php         footer + closing tags
├── front-page.php    homepage (hero, mission log, teams, offer, sponsors, testimonials)
├── page.php          template for every other page (Contact, Sponsorship, About, etc.)
├── index.php          blog/archive fallback
├── js/rocket.js        scroll-driven rocket animation + mobile nav toggle
└── assets/            logo + photos — see assets/README.md, currently empty
```

## Local development

1. Install [Local by Flywheel](https://localwp.com/) (or use Docker/DevKinsta —
   anything that gives you a local WordPress install).
2. Create a new local site. Any WP version close to what's on the live site is fine.
3. Symlink (or copy) this repo folder into `wp-content/themes/pac-theme` inside
   that local install, so you're always editing the real repo files.
4. In wp-admin (`http://yoursite.local/wp-admin`) → **Appearance → Themes**,
   activate "Aerospace Club at Penn."
5. Add the missing images to `assets/` — see `assets/README.md`.
6. Set up the nav menu: **Appearance → Menus** → create a menu called
   "Primary," add Home / Our Teams (with Leadership, Aircraft, Balloon,
   Rocketry, Jet Propulsion as sub-items) / Sponsors / Contact, assign it
   to the "Primary Menu" location.
7. Create a page called "Home," set it as the static front page under
   **Settings → Reading**, so `front-page.php` is used.

## Deploying to the live site

You don't need FTP/SSH for this — it works entirely through the wp-admin
login you already have:

1. Zip the theme folder (**exclude** `.git` and this README's dev-only
   contents aren't a problem, they just won't matter on the live site):
   ```
   zip -r pac-theme.zip pac-theme -x "*.git*"
   ```
2. In wp-admin: **Appearance → Themes → Add New → Upload Theme**
3. Upload the zip, install, activate.
4. Re-check the nav menu and front-page setting on the live site (steps 6–7
   above) — these are WordPress settings, not code, so they don't come
   over automatically with the theme upload.

For faster iteration later, look into the **WP Pusher** plugin — it
connects this GitHub repo to the site and can deploy from wp-admin with
one click (or auto-deploy on push), still with no FTP/SSH required.
See the previous chat/plan for details.

## Making content edits (no code required)

- **Page text** (Contact, Sponsorship, etc.): edit normally through
  **Pages** in wp-admin.
- **Nav menu**: **Appearance → Menus**.
- **Homepage content** (mission log entries, team blurbs, testimonials):
  currently hardcoded in `front-page.php` — this requires a code change
  and a redeploy. See the commented-out `pac_register_mission_log_cpt()`
  in `functions.php` for the path to making this editable from wp-admin
  instead (recommended before this theme sees a full semester of use).

## Design system reference

Colors, type, and spacing are all defined as CSS custom properties at the
top of `style.css`:

- `--penn-red` `#990000` / `--penn-blue` `#011F5B` — Penn institutional colors
- `--pac-blue` `#5EC8E8` — PAC accent
- `--night` `#050B1A` — hero/mission-log background
- Type: Space Grotesk (headings), Inter (body), IBM Plex Mono (stats/labels)

Change a value once here and it updates everywhere.
