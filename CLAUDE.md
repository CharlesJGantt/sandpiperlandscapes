# CLAUDE.md — SEO Fixes: Sandpiper Landscapes
**Site:** http://sandpiperlandscapes.docksal.site/ | **CMS:** Drupal 10 | **Audit date:** 2026-05-15

Sandpiper Landscapes is a locally owned lawn care and landscaping company serving Aiken and Aiken County, SC (CSRA region). In business since 2017. Primary keywords target homeowners searching for lawn mowing, landscaping, irrigation, cleanup, and related services in Aiken, SC and surrounding Aiken County communities including Woodside Plantation, Houndslake, Trolley Run Station, Banks Mill, Highland Park, Cedar Creek, and Pleasant Pointe.

Apply every fix below exactly as written. Do not modify copy unless a character count would exceed the stated limit — in that case trim without removing location or brand terms.

---

## Fix 1 — Homepage `/`

**Issue 1: Title tag is wrong.**
The H1 on the page reads "GET ON THE 2026 SPRING SCHEDULE" and Drupal is using that as the `<title>`. Set the Metatag page title field explicitly so it overrides the H1.

```
TITLE: Lawn Care & Landscaping Services in Aiken, SC | Sandpiper Landscapes
```

**Issue 2: Meta description is missing.**

```
META DESCRIPTION: Locally owned lawn care and landscaping in Aiken, SC since 2017. Weekly mowing, mulch, cleanups, irrigation & more. Serving all of Aiken County. Get a free estimate.
```

**Issue 3: Multiple images missing alt text.**
Set each exactly as shown:

| Image file | Alt text to set |
|---|---|
| `SPL-Trimming-fp-graphic.png` (top right graphic) | `""` (decorative) |
| `spl-weed-eating-fp-graphic.png` (bottom right graphic) | `""` (decorative) |
| `SPL-Trimming-fp-graphic.png` (hero section repeat) | `""` (decorative) |
| `LawnPackage-fp-graphic.png` | `""` (decorative) |
| `spl-mowing-fp-graphic-2.png` | `""` (decorative) |
| `spl-weed-eating-fp-graphic.png` (second instance) | `""` (decorative) |
| `lawncare.jpg` | `Sandpiper Landscapes lawn care service in Aiken, SC` |
| `spring-cleanup.jpg` | `Spring yard cleanup service by Sandpiper Landscapes in Aiken, SC` |
| `mulch.jpg` | `Professional mulch installation in Aiken, SC by Sandpiper Landscapes` |
| `pet-waste.jpg` | `Pet waste cleanup service for Aiken, SC homeowners` |
| `trimed-true-banner-mowing-hero.png` | `""` (decorative) |
| `trimed-true-banner-newsletter-middle.png` | `""` (decorative) |
| `trimmed-true-banner-newsletter-right.png` | `""` (decorative) |
| `corgi-srvc-gfx.png` | `Happy corgi in a clean Aiken backyard — pet waste cleanup service` |
| `no-squat-srvc-gfx.png` | `""` (decorative) |
| `grass-sprinkle-srvc-gfx.png` | `""` (decorative) |
| `golden-good-boy-srvc-gfx.png` | `Golden retriever on a clean, professionally maintained lawn` |
| `bottom-grass-srvc-gfx.png` | `""` (decorative) |
| `aiken-lawn-stripes-hero.png` | `Professionally mowed lawn with striping pattern by Sandpiper Landscapes, Aiken, SC` |

**Issue 4: Paginated variants (`/?page=0`, `/?page=1`, `/?page=2`, `/?page=3`) inherit the broken title and have no meta description.**
Add a canonical link tag on each paginated variant pointing to `/`. Set title and meta description identical to the homepage on each variant.

---

## Fix 2 — Contact Page `/contact`

**Issue 1: Title tag is wrong.**
Drupal is outputting the webform block label "Website feedback" as the `<title>`. Set node title to `Contact Us` and set the Metatag page title to:

```
TITLE: Contact Sandpiper Landscapes | Lawn Care in Aiken, SC
```

**Issue 2: H1 tag is wrong.**
The rendered H1 is "Website feedback" — the webform label is leaking into the page heading. Fix the node so the correct H1 renders:

```
H1: Contact Sandpiper Landscapes
```

**Issue 3: Meta description is missing.**

```
META DESCRIPTION: Contact Sandpiper Landscapes for lawn care in Aiken, SC. Request a free estimate or get on our schedule. Locally owned and serving Aiken County since 2017.
```

**Issue 4: Page has only 2 words of body content — critically thin.**
Add the following body content to the contact page node body field, above or below the contact form:

```
Get in touch with us today. Whether you need a one-time cleanup, want to get on our recurring lawn care schedule, or have a question about any of our services, we're here to help.

We serve homeowners and property managers throughout Aiken and Aiken County, including Woodside Plantation, Houndslake, Trolley Run Station, Banks Mill, Cedar Creek, Highland Park, and Pleasant Pointe. If you're in Aiken County, chances are we can help.

We typically respond to all inquiries within one business day. For faster service, use the form below and select your service type — we'll follow up with a free estimate tailored to your property.

Sandpiper Landscapes has been locally owned and operating in the Aiken area since 2017. We take pride in showing up consistently, doing the job right, and treating every property like it's our own.
```

---

## Fix 3 — Blog Index `/blog`

**Issue 1: Meta description is missing.**

```
META DESCRIPTION: Lawn care tips, landscaping guides, and seasonal advice from Sandpiper Landscapes — your local experts in Aiken and Aiken County, SC since 2017.
```

**Issue 2: H1 tag is missing.**
The blog listing View suppresses the page title. Ensure the following H1 renders on the page:

```
H1: The Trimmed & True Blog
```

**Issue 3: Paginated variants `/blog?page=0` and `/blog?page=1` have no meta description.**
Add a canonical tag to both paginated variants pointing to `/blog`. No content changes needed on paginated variants once canonical is set.

---

## Fix 4 — Portfolio Root `/portfolio`

**Issue 1: Title tag needs local SEO improvement.**
Current: `Sandpiper Landscapes Work Portfolio`

```
TITLE: Lawn Care & Landscaping Portfolio | Sandpiper Landscapes Aiken, SC
```

**Issue 2: Meta description is set as body copy, not a search snippet.**
Current: "After years of transforming properties across the CSRA..."

```
META DESCRIPTION: Real results from Aiken County properties. Browse lawn care, irrigation, hedge trimming, and cleanup work by Sandpiper Landscapes, Aiken, SC.
```

**Issue 3: Page has only 70 words — thin content.**
Append the following after the existing paragraph "Browse the galleries below to see more examples of our work.":

```
Every project in our portfolio represents a real property in Aiken or Aiken County — maintained, restored, or transformed by our crew. We photograph our work because we're proud of it, and because we think you should see exactly what you're getting before you hire us.

From tight residential lots near downtown Aiken to larger properties in Woodside Plantation and Banks Mill, our team has worked across the full range of Aiken County landscapes. Warm-season grasses, sandy soils, summer heat — we know this area and we know what works here.

Browse by category below. If you see work that looks like what you need, reach out and we'll put together a free estimate for your property.
```

**Issue 4: Images on this page have missing alt text.**

| Image file | Alt text to set |
|---|---|
| `MVIMG_20190425_095009.jpg` (first gallery image, missing alt) | `Lush striped lawn mowed by Sandpiper Landscapes in Aiken, SC` |
| `spl-lawn-care-port-hero.jpg` | `Sandpiper Landscapes lawn care work portfolio — Aiken and Aiken County, SC` |
| `spl-irrigation-port-hero.jpg` | `Sandpiper Landscapes irrigation maintenance and repair portfolio — Aiken, SC` |
| `spl-hedge-trim-port-hero.jpg` | `Sandpiper Landscapes hedge trimming and shrub maintenance portfolio — Aiken, SC` |
| `spl-cleanup-port-hero_0.jpg` | `Sandpiper Landscapes property cleanup and landscape restoration portfolio — Aiken County, SC` |

---

## Fix 5 — Portfolio: Lawn Care `/portfolio/lawncare`

**Issue 1: Title tag has a typo ("Porfolio") and is not optimized.**
Current: `Sandpiper Landscapes Lawn Care Porfolio`

```
TITLE: Lawn Care Portfolio | Sandpiper Landscapes Aiken, SC
```

**Issue 2: Meta description is missing.**

```
META DESCRIPTION: Real lawn care results from Sandpiper Landscapes across Aiken County, SC. Mowing, edging, and turf maintenance for warm-season lawns since 2017.
```

**Issue 3: H1 is rendering but empty — the node title is not displaying as H1.**

```
H1: Lawn Care Portfolio — Sandpiper Landscapes, Aiken, SC
```

**Issue 4: Page has 0 words of body content — critically thin.**
Add the following body content above the image gallery:

```
These are real yards from real Aiken County properties — maintained and mowed by our crew week after week, season after season. We photograph our lawn care work because results speak louder than promises.

Sandpiper Landscapes has been mowing, edging, and caring for lawns across Aiken and Aiken County since 2017. We work with warm-season grasses including Bermuda, Zoysia, Centipede, and St. Augustine — the grass types that thrive in Zone 8's heat and humidity. Every lawn gets the same attention to detail: clean mowing lines, trimmed edges, blown-off hardscapes, and a consistent schedule you can count on.

The properties in this gallery span the range of what we do — from smaller residential lots near downtown Aiken to larger acreage properties in Woodside Plantation, Banks Mill, and throughout Aiken County. Whether your lawn needs regular weekly maintenance or a one-time cleanup cut, we can help.

Ready to see what we can do for your property? Request a free estimate and we'll take a look.
```

**Issue 5: First image in gallery is missing alt text.**
`MVIMG_20190425_095009.jpg` — set alt to:
`Lush striped Bermuda lawn professionally mowed by Sandpiper Landscapes in Aiken, SC`

---

## Fix 6 — Portfolio: Irrigation `/portfolio/irrigation`

**Issue 1: Title tag not optimized for local search.**
Current: `Sandpiper Landscapes Irrigation Maintenance Portfolio`

```
TITLE: Irrigation Maintenance Portfolio | Sandpiper Landscapes Aiken, SC
```

**Issue 2: Meta description is missing.**

```
META DESCRIPTION: Irrigation maintenance and repair work by Sandpiper Landscapes in Aiken, SC. We keep Aiken County systems running efficiently all season long.
```

**Issue 3: H1 is rendering but empty.**

```
H1: Irrigation Portfolio — Sandpiper Landscapes, Aiken, SC
```

**Issue 4: Page has 0 words of body content — critically thin.**
Add the following body content above the image gallery:

```
Irrigation systems in Aiken and Aiken County take a beating. Sandy soils drain fast, summer temperatures push into the 90s for weeks at a time, and even a single broken head or clogged zone can leave sections of your lawn stressed and brown before you notice it.

Sandpiper Landscapes provides irrigation inspections, maintenance, and repairs for residential properties throughout Aiken County. We check heads, test coverage, adjust timing, and fix leaks — the kind of detailed work that keeps your system running at full efficiency and your water bill in check.

The work shown in this gallery represents real irrigation projects from properties across Aiken and the broader CSRA area. If your system hasn't been inspected this season, now is a good time to schedule a look before summer heat arrives.
```

---

## Fix 7 — Portfolio: Hedge Trimming `/portfolio/hedge-trimming`

**Issue 1: Title tag not optimized.**
Current: `Sandpiper Landscapes Hedge Trimming Work Portfolio`

```
TITLE: Hedge Trimming & Shrub Pruning Portfolio | Sandpiper Landscapes Aiken, SC
```

**Issue 2: Meta description is missing.**

```
META DESCRIPTION: Hedge trimming and shrub pruning by Sandpiper Landscapes in Aiken, SC. Clean lines and precision work across Aiken County properties.
```

**Issue 3: H1 is rendering but empty.**

```
H1: Hedge Trimming Portfolio — Sandpiper Landscapes, Aiken, SC
```

**Issue 4: Page has 0 words of body content — critically thin.**
Add the following body content above the image gallery:

```
Clean, sharp hedges don't happen by accident. They take the right tools, the right timing, and someone who understands how different shrub varieties grow in Aiken's Zone 8 climate.

Sandpiper Landscapes handles hedge trimming and shrub pruning for residential properties throughout Aiken and Aiken County. We work with everything from boxwoods and ligustrums to ornamental grasses and crape myrtles — shaping and maintaining shrubs so they stay healthy, look defined, and don't overtake your beds or walkways.

The work shown here reflects real trimming projects from properties across the Aiken area. If your hedges are overdue for a cut, reach out for a free estimate.
```

---

## Fix 8 — Portfolio: Property Cleanups `/portfolio/property-cleanups`

**Issue 1: Title tag not optimized.**
Current: `Sandpiper Landscapes Property Cleanup Work Portfolio`

```
TITLE: Property Cleanup Portfolio | Sandpiper Landscapes Aiken, SC
```

**Issue 2: Meta description is missing.**

```
META DESCRIPTION: Property cleanup work by Sandpiper Landscapes in Aiken, SC. Storm debris, overgrowth, and seasonal cleanups across Aiken County.
```

**Issue 3: H1 is rendering but empty.**

```
H1: Property Cleanup Portfolio — Sandpiper Landscapes, Aiken, SC
```

**Issue 4: Page has 0 words of body content — critically thin.**
Add the following body content above the image gallery:

```
Property cleanups are some of the most satisfying work we do — partly because the before-and-after difference is dramatic, and partly because the results genuinely matter to the homeowners who call us.

We handle all types of property cleanup in Aiken and Aiken County: post-winter debris removal, storm damage cleanup, overgrown lot restoration, curb cleanup for homes going on the market, and seasonal bed clearing. Whether the job takes a few hours or a full day, we show up with the right equipment and get it done.

The properties in this gallery range from smaller suburban lots to larger Aiken County acreage. If your yard has been neglected or hit hard by weather, we can help you get it back.
```

---

## Fix 9 — Quick Quote Page `/contact/quickquote`

**Issue 1: Title tag is not localized.**
Current: `Claim A Quick Quote`

```
TITLE: Claim Your Lawn Care Quick Quote | Sandpiper Landscapes Aiken, SC
```

**Issue 2: Meta description is too short and not localized.**
Current: `Lock in your personalized lawn care pricing today`

```
META DESCRIPTION: Got a Sandpiper Landscapes flyer in Aiken County? Claim your Quick Quote here to lock in your lawn care pricing and get on our schedule.
```

**Issue 3: Images on this page are missing alt text.**

| Image file | Alt text to set |
|---|---|
| `Sandpiper-Quick-Quote-Front.jpg` | `Front of Sandpiper Landscapes Quick Quote flyer for Aiken County lawn care pricing` |
| `Sandpiper-Quick-Quote-Back.jpg` | `Back of Sandpiper Landscapes Quick Quote flyer with lawn care service details` |
| Any additional graphic/logo image | `""` (decorative) |

---

## Fix 10 — Services Hub `/services`

**Issue: Meta description is broken — it is pulling raw truncated body content.**
Current: `" Complete Lawn Care & Land"` (not a real description)

```
META DESCRIPTION: Lawn care and landscaping services in Aiken, SC. Recurring mowing, mulch, cleanups, pruning, irrigation, and more. Serving all of Aiken County.
```

**Note:** Title `Complete Lawn Care & Landscaping Services in Aiken, SC` is good — no change needed.

---

## Fix 11 — Recurring Lawn Care `/services/recurring-lawncare-service`

**Issue: Meta description is missing.**

```
META DESCRIPTION: Recurring lawn care in Aiken, SC. Weekly or bi-weekly mowing, trimming, edging, and blowing on a consistent schedule. Serving Aiken County since 2017.
```

**Note:** Title `Recurring Lawn Care Services in Aiken, South Carolina` is good — no change needed.

---

## Fix 12 — One-Time Lawn Care `/services/one-time-lawncare-service`

**Issue: Meta description is a single space character — effectively missing.**
Current: `" "`

```
META DESCRIPTION: Need a one-time lawn cut in Aiken, SC? Pay-per-mow service with no contracts. One visit or occasional cuts — we've got you covered in Aiken County.
```

**Note:** Title `One-Time & Pay-Per-Mow Lawn Care in Aiken, SC` is good — no change needed.

---

## Fix 13 — Property Cleanup Service `/services/property-cleanup`

**Issue: Meta description is a single space character — effectively missing.**
Current: `" "`

```
META DESCRIPTION: Property cleanup in Aiken, SC. Storm debris, overgrowth, seasonal clearing, and landscape restoration. Free estimates for Aiken County.
```

**Note:** Title `Property Cleanup Services in Aiken, South Carolina` is good — no change needed.

---

## Fix 14 — Spring Cleanup `/services/spring-cleanup`

**Issue: Meta description is a single space character — effectively missing.**
Current: `" "`

```
META DESCRIPTION: Spring cleanup in Aiken County, SC. Debris removal, bed prep, and lawn restoration to start the growing season right. Free estimates available.
```

**Note:** Title `Spring Cleanup Services for Aiken County` is good — no change needed.

---

## Fix 15 — Pet Waste Cleanup `/services/pet-waste-cleanup`

**Issue 1: Title tag is missing location.**
Current: `Pet Waste Cleanup Service`

```
TITLE: Pet Waste Cleanup Service in Aiken, SC | Sandpiper Landscapes
```

**Issue 2: Meta description is a single space character — effectively missing.**
Current: `" "`

```
META DESCRIPTION: Pet waste cleanup in Aiken, SC. Weekly or one-time yard scooping so your family can enjoy a clean, safe outdoor space. 30% off for recurring lawn care customers.
```

---

## Fix 16 — Mulch & Flower Beds `/services/mulch-and-flower-beds`

**Issue 1: Title tag is missing location.**
Current: `Professional Mulch Installation Services`

```
TITLE: Mulch Installation & Flower Bed Services in Aiken, SC | Sandpiper Landscapes
```

**Issue 2: Meta description is pulling raw content.**
Current: `" Professional Mulch Installation Services"` (leading space + title text)

```
META DESCRIPTION: Mulch installation and flower bed services in Aiken, SC. Natural local mulch delivered and installed. Clean edges and refreshed curb appeal for Aiken County homes.
```

---

## Fix 17 — Trimming & Pruning `/services/trimming-and-pruning`

**Issue: Meta description is broken — only two characters of content.**
Current: `" Tr"`

```
META DESCRIPTION: Hedge trimming and shrub pruning in Aiken, SC. Clean lines, healthy growth, and precision work on all shrub types in Aiken County.
```

**Note:** Title `Trimming and Pruning Services in Aiken, South Carolina` is good — no change needed.

---

## Fix 18 — Planting Services `/services/planting-services`

**Issue 1: Title tag is missing location.**
Current: `Professional Planting & Bed Services`

```
TITLE: Planting & Flower Bed Services in Aiken, SC | Sandpiper Landscapes
```

**Issue 2: Meta description is a single space character — effectively missing.**
Current: `" "`

```
META DESCRIPTION: Planting and flower bed services in Aiken, SC. Seasonal color, native plants, and custom bed designs for Aiken County homes. Free estimates.
```

---

## Fix 19 — Irrigation Service `/services/irrigation`

**Issue 1: Title tag is missing location.**
Current: `Professional Irrigation Maintenance & Repair Services`

```
TITLE: Irrigation Maintenance & Repair in Aiken, SC | Sandpiper Landscapes
```

**Issue 2: Meta description is a single space character — effectively missing.**
Current: `" "`

```
META DESCRIPTION: Irrigation maintenance and repair in Aiken, SC. We inspect, adjust, and fix residential systems across Aiken County to keep your lawn healthy all season.
```

---

## Fix 20 — Blog: Weekly vs Bi-Weekly `/blog/weekly-vs-biweekly-lawn-care-aiken-augusta`

**Issue: Meta description is missing.**

```
META DESCRIPTION: Weekly or bi-weekly lawn care in Aiken, SC — which is right for your lawn? A local breakdown covering grass health, cost, and CSRA conditions.
```

**Note:** Title is good — no change needed.

---

## Fix 21 — Blog: Best Grass Types `/blog/best-grass-types-aiken-sc-lawns`

**Issue: Meta description is missing.**

```
META DESCRIPTION: Bermuda, Zoysia, Centipede, or St. Augustine — which grass is best for your Aiken lawn? A Zone 8 guide from Sandpiper Landscapes.
```

**Note:** Title is good — no change needed.

---

## Fix 22 — About Page `/about`

**Issue 1: Title tag is too generic — no location or brand.**
Current: `About Us`

```
TITLE: About Sandpiper Landscapes | Lawn Care in Aiken, SC Since 2017
```

**Issue 2: Meta description is too short to be useful.**
Current: `Locally Owned. Community Focused.` (33 characters)

```
META DESCRIPTION: Sandpiper Landscapes has served Aiken County, SC since 2017. Locally owned and committed to professional lawn care and landscaping you can trust.
```

---

## Fix 23 — Privacy Page `/privacy`

**Issue: Meta description is pulling raw body content — not suitable as a search snippet.**
Current: `Privacy PolicyEffective Date: 01/01/2025 At Sandpiper Landscapes...`

```
META DESCRIPTION: Privacy policy for Sandpiper Landscapes, serving Aiken and Aiken County, SC. Learn how we collect, use, and protect your personal information.
```

**Note:** Title `Privacy Statement` is acceptable — no change needed.

---

## Image Alt Text — Global Rule

Apply to every image across the entire site:

- **Decorative images** (backgrounds, dividers, graphic flourishes, icon sprites, pattern fills, section separators): set `alt=""`
- **Content images** (photos of lawns, crews, equipment, before/after, locations): write a description of what is shown, where it is (Aiken, SC or Aiken County where true), and who did the work where applicable
- **Logo**: `alt="Sandpiper Landscapes logo — lawn care and landscaping in Aiken, SC"`
- **Never** leave the alt attribute absent — always set it, even if the value is empty

Keep alt text under 125 characters. Be descriptive, not keyword-stuffed. Never start with "Image of" or "Photo of."

---

## Thin Content — Word Count Targets

| Page | Words before fix | Target after fix |
|---|---|---|
| `/contact` | 2 | 300+ |
| `/portfolio/lawncare` | 0 | 300+ |
| `/portfolio/irrigation` | 0 | 250+ |
| `/portfolio/hedge-trimming` | 0 | 200+ |
| `/portfolio/property-cleanups` | 0 | 200+ |
| `/portfolio` | 70 | 300+ |

---

## Pages With No Required Changes

These pages are fully optimized — do not modify them:

- `/blog/how-to-water-lawn-aiken-augusta-timing-technique-mistakes`
- `/blog/mowing-height-guide-aiken-augusta-csra-zone-8`
- `/blog/zone-8-what-it-means-for-aiken-csra`
- `/blog/zone-8-aiken-csra-south-carolina-challenges`
- `/blog/lawn-weed-identification-natural-control-zone-8-aiken-augusta`
- `/blog/dethatching-vs-aeration-whats-right-for-aiken-lawns`
- `/blog/why-we-only-use-natural-local-mulch-from-aiken-csra-area`
- `/blog/annual-vs-perennial-plants-aiken-sc-zone-8-guide`
- `/how-to-prepare-aiken-lawn-summer-heatwave-zone-8`
- `/blog/spring-cleanup-services-aiken-county-landscape-restoration`
- `/blog/irrigation-repairs-aiken-sc-diy-guide-2025`
- `/blog/soil-testing-aiken-sc-hidden-key-best-lawn`
- `/blog/tree-limb-lifting-aiken-sc-crown-raising-guide`
- `/blog/mulch-bed-cleanout-curb-appeal-aiken-under-200`
- `/blog/organic-fertilizers-aiken-sc-compost-milorganite-zone-8`
- `/blog/curb-appeal-landscaping-projects-aiken-zone-8`
- `/blog/storm-damage-aiken-sc-cleanup-help-emergency-access`
- `/blog/pause-sprinklers-rain-aiken-zone-8-overwatering-guide`

All `/user/*` paths, direct `/sites/default/files/*.jpg` URLs, RSS feeds, and paginated system variants are Drupal system pages — no SEO fixes are needed or should be applied to these pages.
