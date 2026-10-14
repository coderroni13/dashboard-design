<?php
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/header.php";
require_once __DIR__ . "/sidebar.php";

$menuCount = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM menu"))[0];
$orderCount = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM orders"))[0];
$revenue = mysqli_fetch_row(mysqli_query($conn, "SELECT SUM(total) FROM orders"))[0] ?? 0;
?>
    <!-- Main Content -->
    <div class="main-content">
      <!-- Dashboard Header -->
      <div class="dashboard-header">
        <div>
          <h1 class="dashboard-title">Restaurant Analytics</h1>
          <p class="dashboard-subtitle">
            Track your kitchen performance and sales metrics
          </p>
        </div>

        <div style="display: flex">
          <div class="date-filter">
            <span>October 15, 2024</span>
            <span style="margin-left: 10px">▼</span>
          </div>

          <div class="filter-button">
            <span>Apply Filters</span>
          </div>
        </div>
      </div>

      <!-- Dashboard Grid -->
      <div class="dashboard-grid">
        <!-- Quick Stats -->
        <div class="quick-stats">
          <div class="stat-card">
            <div class="stat-icon blue-gradient">🍽️</div>
            <div class="stat-title">Menu Items</div>
            <div class="stat-value"><?php echo (int) $menuCount; ?></div>
            <div class="stat-badge badge-blue">From database</div>
          </div>

          <div class="stat-card">
            <div class="stat-icon purple-gradient">🛒</div>
            <div class="stat-title">Total Orders</div>
            <div class="stat-value"><?php echo (int) $orderCount; ?></div>
            <div class="stat-badge badge-purple">From database</div>
          </div>

          <div class="stat-card">
            <div class="stat-icon green-gradient">💰</div>
            <div class="stat-title">Total Revenue</div>
            <div class="stat-value">$<?php echo number_format((float) $revenue, 2); ?></div>
            <div class="stat-badge badge-green">From database</div>
          </div>

          <div class="stat-card">
            <div class="stat-icon orange-gradient">📈</div>
            <div class="stat-title">Net Profit</div>
            <div class="stat-value">$42,500</div>
            <div class="stat-badge badge-orange">+5.2% Growth Rate</div>
          </div>
        </div>

        <!-- Revenue Chart -->
        <div class="revenue-chart-container">
          <div class="chart-header">
            <div class="chart-title">Revenue Distribution</div>
            <div class="period-tabs">
              <div class="period-tab">Daily</div>
              <div class="period-tab">Weekly</div>
              <div class="period-tab active">Monthly</div>
              <div class="period-tab">Yearly</div>
            </div>
          </div>

          <div class="revenue-chart">
            <div class="circular-chart">
              <div class="donut-chart">
                <div class="donut-hole">
                  <div class="donut-total">$<?php echo number_format((float) $revenue, 2); ?></div>
                  <div class="donut-label">Total Revenue</div>
                </div>
              </div>
            </div>
          </div>

          <div class="chart-legend">
            <div class="legend-item">
              <div class="legend-color" style="background-color: #4169e1"></div>
              <div>Dine-in: $10,625 (25%)</div>
            </div>
            <div class="legend-item">
              <div class="legend-color" style="background-color: #9370db"></div>
              <div>Delivery: $12,750 (30%)</div>
            </div>
            <div class="legend-item">
              <div class="legend-color" style="background-color: #43a047"></div>
              <div>Takeout: $8,500 (20%)</div>
            </div>
            <div class="legend-item">
              <div class="legend-color" style="background-color: #ff9800"></div>
              <div>Catering: $10,625 (25%)</div>
            </div>
          </div>
        </div>

        <!-- Performance Container -->
        <div class="performance-container">
          <div class="chart-header">
            <div class="chart-title">Performance Goals</div>
            <div>📊</div>
          </div>

          <div class="goal-progress">
            <div class="goal-item">
              <div class="goal-header">
                <div class="goal-title">Monthly Orders</div>
                <div class="goal-value">2,450 / 3,000</div>
              </div>
              <div class="progress-bar">
                <div class="progress progress-blue" style="width: 82%"></div>
              </div>
            </div>

            <div class="goal-item">
              <div class="goal-header">
                <div class="goal-title">Customer Satisfaction</div>
                <div class="goal-value">4.7 / 5.0</div>
              </div>
              <div class="progress-bar">
                <div class="progress progress-purple" style="width: 94%"></div>
              </div>
            </div>

            <div class="goal-item">
              <div class="goal-header">
                <div class="goal-title">Revenue Target</div>
                <div class="goal-value">$42,500 / $50,000</div>
              </div>
              <div class="progress-bar">
                <div class="progress progress-green" style="width: 85%"></div>
              </div>
            </div>
          </div>

          <div
            style="
              display: flex;
              justify-content: space-between;
              margin-top: 40px;
            "
          >
            <div style="text-align: center; flex: 1">
              <div style="font-size: 32px; font-weight: 700; color: #4169e1">
                32
              </div>
              <div style="font-size: 14px; color: #8a94a6">Today's Orders</div>
            </div>

            <div style="text-align: center; flex: 1">
              <div style="font-size: 32px; font-weight: 700; color: #43a047">
                28
              </div>
              <div style="font-size: 14px; color: #8a94a6">Completed</div>
            </div>

            <div style="text-align: center; flex: 1">
              <div style="font-size: 32px; font-weight: 700; color: #ff9800">
                4
              </div>
              <div style="font-size: 14px; color: #8a94a6">In Progress</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>