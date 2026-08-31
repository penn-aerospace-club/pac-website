# Handoff Notes

Keep this file up to date and read it first if you're inheriting this repo.
Fill in the blanks below — don't commit real passwords here, just where to
find them (a shared password manager, the officer who holds them, etc.).

## Ownership

- **GitHub org**: _____________________ (add new officers here, not to a personal account)
- **WordPress admin URL**: `https://aerospaceclub.seas.upenn.edu/wp-admin`
- **WordPress admin login owned by / stored in**: _____________________
- **Domain / DNS**: managed by Penn SEAS Computing — subdomain of `seas.upenn.edu`
- **SEAS IT / Computing contact**: _____________________
- **Club contact email**: pac@engineering.upenn.edu

## Deployment method currently in use

- [ ] Manual zip-upload via Appearance → Themes → Add New → Upload Theme
- [ ] WP Pusher (connected to this repo — deploy button in wp-admin)
- [ ] FTP/SFTP (credentials: _____________________ )
- [ ] Other: _____________________

## What a new officer needs to do to get started

1. Get added to the GitHub org (ask current lead)
2. Get wp-admin login (ask current lead / whoever holds it)
3. Read `README.md` in this repo for local dev setup
4. Confirm you can deploy a trivial change (e.g. edit a typo) end-to-end
   before you need it for something real

## Known gaps / things to fix next

- [ ] Real logo, hero photo, and mission-log photos need to be added to
      `assets/` (see `assets/README.md`) — theme ships without them
- [ ] `screenshot.png` needs to be added to the theme root
- [ ] Mission log entries are hardcoded in `front-page.php` — consider
      wiring up the commented-out custom post type in `functions.php` so
      future officers can add entries without editing code
- [ ] No staging/preview environment — changes go from local straight to
      production. Worth asking SEAS IT if a staging subdomain is possible.

## Contacts worth keeping current

- Current site lead: _____________________
- Backup / co-lead: _____________________
