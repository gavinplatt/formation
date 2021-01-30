# Upkeep

- Whenever install an app, a brew, a cask, or something in npm be sure to also add it here
- When changing machines, check everything that's installed on old machine is reflected in here
- Update below with instructions for:
    - Data
    - Application data (e.g. Bear, DayOne and Pixave libraries)
    - Application settings (e.g. Mail accounts), preferences, plugins (e.g. Sketch extensions)

---

# New computer setup
- Download this repo and unzip to your home folder
- System Preferenes > Internet Accounts. Sign in to Apple iCloud. Sync Contacts, Calendars, Reminders, Safari, Notes, Keychain. Disable all others. Add others later (see below)
- Check apps in `swag/brews` and `swag/casks`. These are all to be installed on Rosetta. If an M1 version now exists, add it to the manual list below and remove it from these files
- `cd ~/formation && ./slay` (do this in a Rosetta terminal so everythign is set up on Rosetta emulation, rather than Apple Silicone)
- Check zsh is installed. `zsh --version`. Install it if not – Installing ZSH

---

# After slay has run complete the following

## System Prefs
- Mouse
    - Enable secondary click
    - Set tracking speed to 6 of 10
- Keyboard
    - Keyboard: Set Key Repeat to full, delay to shortest
    - Shortcuts > Spotlight: Disable "Show Spotlight search"
- Accessibility
    - Display
        - Reduce transparency
    - Zoom
        - Use keyboard shortcuts
        - Use scroll gesture ctrl
        - Disable smooth images
    - Pointer controls
        - Trackpad options: enable dragging with three fingers
- Dock
    - Disable “Show recent applications in Dock” in System Preferences
- Internet Accounts
    - Enable relevant services, iCloud keychain should bring them over
- Users & Groups
    - Disable Guest User

## Terminal setup
- Check zsh is installed. `zsh --version`. Install it if not.
- Install Oh My Zsh `sh -c "$(curl -fsSL https://raw.githubusercontent.com/ohmyzsh/ohmyzsh/master/tools/install.sh)”` See https://github.com/ohmyzsh/ohmyzsh


## Finish brew setup

- `brew link mysql@5.7`
- `brew services restart mysql@5.7`
- `brew unlink php`
- `brew link php@7.3`
- `brew services restart php@7.3`
- `valet use php@7.3 --force`
- Open testsite.test to confirm running php 7.3

## Manually install Arm M1 Apple Silicone Apps
- 1password
- alfred
- balsamiq-wireframes
- bartender
- dropbox
- firefox
- google-chrome
- notion
- sketch
- slack
- tuple
- visual-studio-code
- zoom

## Manually install non-brew non-app-store apps
- Adobe Creative Cloud
- Boostnote
- MAMP Pro
- Pixave
- [Postgres](https://postgresapp.com/downloads.html)

## @todo: buy these off app store then move to /swag/apps
- 414209656::BetterRename9
- 931657367::Calcbot
- 587512244::Kaleidoscope (ask Chris first)
- 1528890965::TextSniper

## Dropbox
- Open Dropbox, sign into Personal
- Selectively sync just the personal 1Password folder (do the others later)

## 1Password
- Sync using Dropbox - choose vault above
- Add Good Work 1Password.com account
- In Preferences > Advanced > Enable "Allow creation of vaults outside 1Password accounts"
- Enable Spotlight and 3rd party app integrations in Preferences > Advanced

## SSH
- Manually export the 2 key files from 1Password to the desktop then copy with below commands:
```
cd ~
mkdir .ssh
mv ~/Desktop/id_rsa* ~/.ssh/.
cd .ssh
chmod 600 id_rsa
chmod 644 id_rsa.pub
# Remove ssh key passphrase
ssh-keygen -p
```

## mySQL password
- `mysql -uroot`
- `set password = password("root");`

## Set up Harry etc
- See https://github.com/simplygoodwork/manual/blob/master/getting-comfortable.md

------

# Data

Note: OPSX Big Sur changes folder names in ~Library/Containers to be more readable than `com.whatever`. Don't freak out! Open in terminal to see actual names.

## Dropbox
- On old computer:
    - Ensure Dropbox up to date and everythign synced
    - Run Time Machine. Eject disk.
- On new computer:
    - Disable selective sync (sync everything)
    - Immediately pause syncing
    - Copy everything from `Time Machine > Latest > ... > Dropbox` to `~/Dropbox`
    - Unpause syncing
    - Add `Dropbox/Documents|Photos|etc` to Finder sidebar

## Downloads
- Not sure this is in Time Machine. Manually copy anything needed from old (shoudl be empty in theory)

## Desktop
- Manually copy anything needed from Time Machine (should be empty in theory)

## Day One
- Copy `[TM Latest] /Users/gavin/Library/Group Containers/5U8NS4GX82.dayoneapp2/*` to same location on new
- Open app to confirm

## Fonts
- Copy `[TM Latest] /Users/gavin/Library/FontCollections/*` to same location on new. Don't overwrite anything.
- Copy `[TM Latest] /Users/gavin/Library/Fonts/*` to same location on new. Don't overwrite anything.

## SnippetsLab

- Preferences > Open library... and choose `Dropbox/Application Data Libraries/SnippetsLab/Data/Library/Application Support/main.snippetslablibrary`

## Pixave

- Preferences > Library > Move... and choose `Dropbox/Application Data Libraries/Pixave`

## Bear

- Copy `[TM Latest] /Users/gavin/Library/Group Containers/9K33E3U3T4.net.shinyfrog.bear/*` to same location on new

## Mail
- Copy `[TM Latest] /Users/gavin/Library/Mail/*` to same location on new
- Copy `[TM Latest] /Users/gavin/Library/Preferences/com.apple.mail-shared.plist` to same location on new

## Notes

- Copy `[TM Latest] /Users/gavin/Library/Group Containers/group.com.apple.notes/` to same location on new
- Or just use iCloud

## mySQL data
- Dump all DBs on old: `mysqldump -u root -p --all-databases > all.sql`
- Copy to new, then import all DBs: `mysql -u root -p < all.sql`

## Sequal Pro/Ace connections
- Export these from old and import to new

## Transmit connections
- Export these from old and import to new

## Sketch
- @todo: Copy preferences

---

# Prefs

## Internet Accounts
- iCloud see above
- gavin@simplygoodwork.com. Calendars.
- gplatt2000@gmail.com. Contacts, Calendars.
- Fastmail
    - Download profile config from here – https://www.fastmail.com/settings/setup – setup guides > Mac > Mail, Contacts & Calendar > download this file.
    - This shoudl set up the below:
    - gavinplatt@fastmail.com. Mail.
    - gavinplatt@fastmail.com. Calendars & Reminders.
    - gavinplatt@fastmail.com. Contacts.


## Open Alfred
- Activate the Powerpack, licence in 1Password/Evernote
- Set up syncing under the Advanced tab, the folder is in Dropbox/Sync/Alfred, make sure Dropbox has finished syncing before doing this
- Change theme to macOS Sierra

## Rectange
- Run rectange and disable everything except left/right half, change fullscreen to alt+cmd+up
- Enable “Launch at login”, change to run as a background app in the footer settings

## Mail
- Should pull in all accounts, folders etc via Fastmail account set up in Internet Accounts above
- Show most recent messages at the top of conversations

## Contacts
- Sort by first name

## Bartender
- Launch on login
- Menu items
    - Airport Wifi: Hide
    - Airplay displays: Hide
    - Clock: Always show
    - Dropbox: Hide
    - Dropshare: Show
    - Harvest: Show
    - Location Menu: Hide
    - Spotlight: Always hide
- Arrange displayed items
    - Harvest, Dropshare, Bartender, Clock

## Finder Preferences
- New Finder windows show: home folder
- Sidebar
    - Remove: Recents, iCloud Drive, CDs/DVDs, Tags
    - Add home
- In finders actual sidebar, drag in "Sites", order alphabetically but with home at the top
- Add Dropbox > Documents etc to sidebar

## Safari Prefs
- Autofill > Unticker username & passwords

## Sip Prefs
- Dock: disable

## VS Code Prefs
- Preferences > Settings > Turn on Sync. Sing in to pull down settings from Github account ('replace local')

---

# Backups
- Turn off Time Machine.
- Set it up after certain everythign is okay. Allow 1 week.
- @todo: See Backup setup at ...