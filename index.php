<?php include("header.php") ?>

<!-- Breadcrumb -->
<div class="breadcrumb-bar breadcrumb-bg-06 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-logo">
                    <a class="logo-white header-logo" href="index.php">
                        <img src="assets/img/newimages/logo-transparent-white.png" class="logo" alt="Logo">
                    </a>
                </div>
                <div class="banner-content mx-auto">
                    <h1>Find Your Perfect <span>Boat Experience</span></h1>
                    <p>Discover amazing boat rentals and cruises in beautiful locations</p>
                    <a href="#boats-section" class="Book_button">
                        <iconify-icon icon="material-symbols:sailing"></iconify-icon>
                        Explore Boats
                        <iconify-icon icon="material-symbols:arrow-forward" class="buttonarrowRight"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Wrapper -->
<div class="content mainpageConteiner" id="boats-section">
    <div class="container">
        <div class="row">
            <!-- Filter Toggle Button -->
            <div class="col-12 filter-toggle-container mb-3" style="display: none;">
                <button class="filter-toggle" id="filterToggleBtn">
                    <iconify-icon icon="material-symbols:filter-list"></iconify-icon>
                    Filters
                </button>
            </div>

            <!-- Filter Sidebar (Hidden by default) -->
            <div class="col-xl-3 col-lg-4 theiaStickySidebar" id="filterSidebar" style="display: none;">
                <div class="filter-sidebar">
                    <div class="filter-header d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Filters</h5>
                        <button class="btn btn-sm btn-outline-secondary" id="clearFilters">Clear All</button>
                    </div>
                    
                    <!-- Price Range Filter -->
                    <div class="filter-group mb-4">
                        <h6 class="filter-title">Price Range</h6>
                        <div class="filter-range">
                            <input type="range" class="form-range" min="0" max="1000" value="500" id="priceRange">
                            <div class="d-flex justify-content-between">
                                <span>€0</span>
                                <span id="priceValue">€500</span>
                                <span>€1000</span>
                            </div>
                        </div>
                    </div>

                    <!-- Boat Type Filter -->
                    <div class="filter-group mb-4">
                        <h6 class="filter-title">Boat Type</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="yacht" id="yacht">
                            <label class="form-check-label" for="yacht">Yacht</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="sailboat" id="sailboat">
                            <label class="form-check-label" for="sailboat">Sailboat</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="motorboat" id="motorboat">
                            <label class="form-check-label" for="motorboat">Motorboat</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="catamaran" id="catamaran">
                            <label class="form-check-label" for="catamaran">Catamaran</label>
                        </div>
                    </div>

                    <!-- Capacity Filter -->
                    <div class="filter-group mb-4">
                        <h6 class="filter-title">Capacity</h6>
                        <select class="form-select" id="capacityFilter">
                            <option value="">All Capacities</option>
                            <option value="1-4">1-4 People</option>
                            <option value="5-8">5-8 People</option>
                            <option value="9-12">9-12 People</option>
                            <option value="13+">13+ People</option>
                        </select>
                    </div>

                    <!-- Duration Filter -->
                    <div class="filter-group mb-4">
                        <h6 class="filter-title">Duration</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2h" id="duration2h">
                            <label class="form-check-label" for="duration2h">2 Hours</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4h" id="duration4h">
                            <label class="form-check-label" for="duration4h">4 Hours</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="8h" id="duration8h">
                            <label class="form-check-label" for="duration8h">8 Hours</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="fullday" id="durationFullday">
                            <label class="form-check-label" for="durationFullday">Full Day</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Boats Grid -->
            <div class="col-xl-9 col-lg-8 boatcardS_Section" id="boatsGrid">
                <div class="row homeboatCards">
                    <!-- Boat Card 1 -->
                    <div class="col-xl-4 col-lg-6 col-md-6 boat-card" data-type="yacht" data-capacity="6" data-price="400">
                        <a href="boat-details.php">
                            <div class="place-item">
                                <div class="place-img">
                                    <img src="assets/img/cruise/cruise-01.jpg" alt="Luxury Yacht">
                                    <div class="fav-icon">
                                        <i class="isax isax-heart"></i>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="place-content-wrap">
                                        <h5>Luxury Yacht Experience</h5>
                                        <div class="boatLocation">
                                            <iconify-icon icon="material-symbols:location-on"></iconify-icon>
                                            San Francisco Bay
                                        </div>
                                        <div class="curise-details">
                                            <p class="passengers_data data_style">
                                                <iconify-icon icon="mynaui:users"></iconify-icon>
                                                <span class="label_data">Max 6 passengers</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="boatPrice_wrap">
                                        <h5>From <span>€400</span>/Day</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Boat Card 2 -->
                    <div class="col-xl-4 col-lg-6 col-md-6 boat-card" data-type="sailboat" data-capacity="8" data-price="300">
                        <a href="boat-details.php">
                            <div class="place-item">
                                <div class="place-img">
                                    <img src="assets/img/cruise/cruise-02.jpg" alt="Classic Sailboat">
                                    <div class="fav-icon">
                                        <i class="isax isax-heart"></i>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="place-content-wrap">
                                        <h5>Classic Sailboat Adventure</h5>
                                        <div class="boatLocation">
                                            <iconify-icon icon="material-symbols:location-on"></iconify-icon>
                                            Marina District
                                        </div>
                                        <div class="curise-details">
                                            <p class="passengers_data data_style">
                                                <iconify-icon icon="mynaui:users"></iconify-icon>
                                                <span class="label_data">Max 8 passengers</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="boatPrice_wrap">
                                        <h5>From <span>€300</span>/Day</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Boat Card 3 -->
                    <div class="col-xl-4 col-lg-6 col-md-6 boat-card" data-type="motorboat" data-capacity="4" data-price="250">
                        <a href="boat-details.php">
                            <div class="place-item">
                                <div class="place-img">
                                    <img src="assets/img/cruise/cruise-03.jpg" alt="Speed Motorboat">
                                    <div class="fav-icon">
                                        <i class="isax isax-heart"></i>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="place-content-wrap">
                                        <h5>Speed Motorboat</h5>
                                        <div class="boatLocation">
                                            <iconify-icon icon="material-symbols:location-on"></iconify-icon>
                                            Fisherman's Wharf
                                        </div>
                                        <div class="curise-details">
                                            <p class="passengers_data data_style">
                                                <iconify-icon icon="mynaui:users"></iconify-icon>
                                                <span class="label_data">Max 4 passengers</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="boatPrice_wrap">
                                        <h5>From <span>€250</span>/Day</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Boat Card 4 -->
                    <div class="col-xl-4 col-lg-6 col-md-6 boat-card" data-type="catamaran" data-capacity="12" data-price="600">
                        <a href="boat-details.php">
                            <div class="place-item">
                                <div class="place-img">
                                    <img src="assets/img/cruise/cruise-04.jpg" alt="Luxury Catamaran">
                                    <div class="fav-icon">
                                        <i class="isax isax-heart"></i>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="place-content-wrap">
                                        <h5>Luxury Catamaran</h5>
                                        <div class="boatLocation">
                                            <iconify-icon icon="material-symbols:location-on"></iconify-icon>
                                            Alcatraz Island
                                        </div>
                                        <div class="curise-details">
                                            <p class="passengers_data data_style">
                                                <iconify-icon icon="mynaui:users"></iconify-icon>
                                                <span class="label_data">Max 12 passengers</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="boatPrice_wrap">
                                        <h5>From <span>€600</span>/Day</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Boat Card 5 -->
                    <div class="col-xl-4 col-lg-6 col-md-6 boat-card" data-type="yacht" data-capacity="10" data-price="800">
                        <a href="boat-details.php">
                            <div class="place-item">
                                <div class="place-img">
                                    <img src="assets/img/cruise/cruise-05.jpg" alt="Premium Yacht">
                                    <div class="fav-icon">
                                        <i class="isax isax-heart"></i>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="place-content-wrap">
                                        <h5>Premium Yacht Charter</h5>
                                        <div class="boatLocation">
                                            <iconify-icon icon="material-symbols:location-on"></iconify-icon>
                                            Golden Gate Bridge
                                        </div>
                                        <div class="curise-details">
                                            <p class="passengers_data data_style">
                                                <iconify-icon icon="mynaui:users"></iconify-icon>
                                                <span class="label_data">Max 10 passengers</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="boatPrice_wrap">
                                        <h5>From <span>€800</span>/Day</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Boat Card 6 -->
                    <div class="col-xl-4 col-lg-6 col-md-6 boat-card" data-type="motorboat" data-capacity="6" data-price="350">
                        <a href="boat-details.php">
                            <div class="place-item">
                                <div class="place-img">
                                    <img src="assets/img/cruise/cruise-06.jpg" alt="Sport Motorboat">
                                    <div class="fav-icon">
                                        <i class="isax isax-heart"></i>
                                    </div>
                                </div>
                                <div class="place-content">
                                    <div class="place-content-wrap">
                                        <h5>Sport Motorboat</h5>
                                        <div class="boatLocation">
                                            <iconify-icon icon="material-symbols:location-on"></iconify-icon>
                                            Pier 39
                                        </div>
                                        <div class="curise-details">
                                            <p class="passengers_data data_style">
                                                <iconify-icon icon="mynaui:users"></iconify-icon>
                                                <span class="label_data">Max 6 passengers</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="boatPrice_wrap">
                                        <h5>From <span>€350</span>/Day</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Filter Toggle Styles -->
<style>
/* Filter Toggle Button Styles */
.filter-toggle-container {
    display: flex !important;
    justify-content: flex-end;
    margin-bottom: 1rem;
}

.filter-toggle {
    background: #1476d5;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    font-size: 1rem;
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 2px 4px rgba(20, 118, 213, 0.2);
}

.filter-toggle:hover {
    background: #0d5aa7;
    transform: translateY(-1px);
    box-shadow: 0 4px 8px rgba(20, 118, 213, 0.3);
}

.filter-toggle:active {
    transform: translateY(0);
}

.filter-toggle iconify-icon {
    font-size: 1.2rem;
}

/* Filter Sidebar Styles */
.filter-sidebar {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border: 1px solid #e4ebf1;
}

.filter-header {
    border-bottom: 1px solid #e4ebf1;
    padding-bottom: 15px;
    margin-bottom: 20px;
}

.filter-title {
    font-size: 1.1rem;
    font-weight: 500;
    color: #313131;
    margin-bottom: 15px;
}

.filter-group {
    border-bottom: 1px solid #f0f0f0;
    padding-bottom: 20px;
}

.filter-group:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.filter-range {
    padding: 10px 0;
}

.filter-range input[type="range"] {
    width: 100%;
    margin: 10px 0;
}

.form-check {
    margin-bottom: 10px;
}

.form-check-label {
    font-size: 16px;
    color: #4E5561;
    cursor: pointer;
}

.form-check-input:checked {
    background-color: #1476d5;
    border-color: #1476d5;
}

/* Animation for sidebar toggle */
#filterSidebar {
    transition: all 0.3s ease;
    transform: translateX(0);
}

#filterSidebar.hiding {
    transform: translateX(-100%);
    opacity: 0;
}

/* Adjust boats grid when filter is shown/hidden */
.boatcardS_Section {
    transition: all 0.3s ease;
}

/* Mobile responsive adjustments */
@media (max-width: 1024px) {
    .filter-toggle-container {
        display: flex !important;
        justify-content: flex-end;
    }
    
    #filterSidebar {
        position: fixed;
        top: 0;
        left: -100%;
        height: 100vh;
        width: 300px;
        z-index: 10000;
        background: white;
        overflow-y: auto;
        transition: left 0.3s ease;
    }
    
    #filterSidebar.show {
        left: 0;
    }
    
    .filter-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 9999;
        display: none;
    }
    
    .filter-overlay.show {
        display: block;
    }
    
    .filter-sidebar {
        height: 100%;
        border-radius: 0;
        padding: 20px;
    }
    
    .filter-header {
        position: sticky;
        top: 0;
        background: white;
        z-index: 1;
        padding-bottom: 15px;
    }
}

@media (max-width: 768px) {
    .filter-toggle {
        padding: 8px 16px;
        font-size: 0.9rem;
    }
    
    #filterSidebar {
        width: 280px;
    }
}
</style>

<!-- Filter Toggle JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterToggleBtn = document.getElementById('filterToggleBtn');
    const filterSidebar = document.getElementById('filterSidebar');
    const boatsGrid = document.getElementById('boatsGrid');
    const filterToggleContainer = document.querySelector('.filter-toggle-container');
    const clearFiltersBtn = document.getElementById('clearFilters');
    const priceRange = document.getElementById('priceRange');
    const priceValue = document.getElementById('priceValue');
    
    let isFilterVisible = false;
    let filterOverlay = null;

    // Show filter toggle button on page load
    if (filterToggleContainer) {
        filterToggleContainer.style.display = 'flex';
    }

    // Create overlay for mobile
    function createOverlay() {
        if (!filterOverlay) {
            filterOverlay = document.createElement('div');
            filterOverlay.className = 'filter-overlay';
            document.body.appendChild(filterOverlay);
            
            filterOverlay.addEventListener('click', function() {
                hideFilters();
            });
        }
    }

    // Show filters function
    function showFilters() {
        isFilterVisible = true;
        
        if (window.innerWidth <= 1024) {
            // Mobile behavior
            createOverlay();
            filterSidebar.style.display = 'block';
            setTimeout(() => {
                filterSidebar.classList.add('show');
                filterOverlay.classList.add('show');
            }, 10);
        } else {
            // Desktop behavior
            filterSidebar.style.display = 'block';
            boatsGrid.classList.remove('col-xl-12', 'col-lg-12');
            boatsGrid.classList.add('col-xl-9', 'col-lg-8');
        }
        
        filterToggleBtn.innerHTML = '<iconify-icon icon="material-symbols:close"></iconify-icon> Close Filters';
    }

    // Hide filters function
    function hideFilters() {
        isFilterVisible = false;
        
        if (window.innerWidth <= 1024) {
            // Mobile behavior
            filterSidebar.classList.remove('show');
            if (filterOverlay) {
                filterOverlay.classList.remove('show');
            }
            setTimeout(() => {
                filterSidebar.style.display = 'none';
            }, 300);
        } else {
            // Desktop behavior
            filterSidebar.classList.add('hiding');
            setTimeout(() => {
                filterSidebar.style.display = 'none';
                filterSidebar.classList.remove('hiding');
                boatsGrid.classList.remove('col-xl-9', 'col-lg-8');
                boatsGrid.classList.add('col-xl-12', 'col-lg-12');
            }, 300);
        }
        
        filterToggleBtn.innerHTML = '<iconify-icon icon="material-symbols:filter-list"></iconify-icon> Filters';
    }

    // Toggle filter visibility
    function toggleFilters() {
        if (isFilterVisible) {
            hideFilters();
        } else {
            showFilters();
        }
    }

    // Event listeners
    if (filterToggleBtn) {
        filterToggleBtn.addEventListener('click', toggleFilters);
    }

    // Price range update
    if (priceRange && priceValue) {
        priceRange.addEventListener('input', function() {
            priceValue.textContent = '€' + this.value;
        });
    }

    // Clear all filters
    if (clearFiltersBtn) {
        clearFiltersBtn.addEventListener('click', function() {
            // Reset all form inputs
            const checkboxes = filterSidebar.querySelectorAll('input[type="checkbox"]');
            const selects = filterSidebar.querySelectorAll('select');
            const ranges = filterSidebar.querySelectorAll('input[type="range"]');
            
            checkboxes.forEach(checkbox => checkbox.checked = false);
            selects.forEach(select => select.selectedIndex = 0);
            ranges.forEach(range => {
                range.value = range.getAttribute('value') || range.min;
                const event = new Event('input');
                range.dispatchEvent(event);
            });
            
            // Show all boat cards
            const boatCards = document.querySelectorAll('.boat-card');
            boatCards.forEach(card => card.style.display = 'block');
        });
    }

    // Handle window resize
    window.addEventListener('resize', function() {
        if (isFilterVisible && window.innerWidth > 1024) {
            // Switch from mobile to desktop view
            if (filterOverlay) {
                filterOverlay.classList.remove('show');
            }
            filterSidebar.classList.remove('show');
            filterSidebar.style.display = 'block';
            boatsGrid.classList.remove('col-xl-12', 'col-lg-12');
            boatsGrid.classList.add('col-xl-9', 'col-lg-8');
        } else if (isFilterVisible && window.innerWidth <= 1024) {
            // Switch from desktop to mobile view
            createOverlay();
            filterSidebar.classList.add('show');
            filterOverlay.classList.add('show');
            boatsGrid.classList.remove('col-xl-9', 'col-lg-8');
            boatsGrid.classList.add('col-xl-12', 'col-lg-12');
        }
    });

    // Filter functionality
    function applyFilters() {
        const boatCards = document.querySelectorAll('.boat-card');
        const selectedTypes = Array.from(document.querySelectorAll('input[type="checkbox"]:checked'))
            .map(cb => cb.value)
            .filter(value => ['yacht', 'sailboat', 'motorboat', 'catamaran'].includes(value));
        const selectedCapacity = document.getElementById('capacityFilter').value;
        const maxPrice = parseInt(priceRange.value);
        const selectedDurations = Array.from(document.querySelectorAll('input[type="checkbox"]:checked'))
            .map(cb => cb.value)
            .filter(value => ['2h', '4h', '8h', 'fullday'].includes(value));

        boatCards.forEach(card => {
            const cardType = card.getAttribute('data-type');
            const cardCapacity = parseInt(card.getAttribute('data-capacity'));
            const cardPrice = parseInt(card.getAttribute('data-price'));
            
            let showCard = true;

            // Filter by type
            if (selectedTypes.length > 0 && !selectedTypes.includes(cardType)) {
                showCard = false;
            }

            // Filter by capacity
            if (selectedCapacity) {
                const [min, max] = selectedCapacity.split('-').map(num => 
                    num === '+' ? Infinity : parseInt(num.replace('+', ''))
                );
                if (max) {
                    if (cardCapacity < min || cardCapacity > max) {
                        showCard = false;
                    }
                } else {
                    if (cardCapacity < min) {
                        showCard = false;
                    }
                }
            }

            // Filter by price
            if (cardPrice > maxPrice) {
                showCard = false;
            }

            // Show/hide card
            card.style.display = showCard ? 'block' : 'none';
        });
    }

    // Add event listeners for filter inputs
    const filterInputs = filterSidebar.querySelectorAll('input, select');
    filterInputs.forEach(input => {
        input.addEventListener('change', applyFilters);
        if (input.type === 'range') {
            input.addEventListener('input', applyFilters);
        }
    });

    // Initialize with filters hidden and full width grid
    boatsGrid.classList.add('col-xl-12', 'col-lg-12');
    boatsGrid.classList.remove('col-xl-9', 'col-lg-8');
});
</script>

<?php include("footer.php") ?>