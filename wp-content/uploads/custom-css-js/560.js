<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function () {
  const steps = document.querySelectorAll(".form-step");
  const nextBtn = document.getElementById("nextBtn");
  const prevBtn = document.getElementById("prevBtn");
  let currentStep = 0;

  function showStep(index) {
    steps.forEach((step, i) => {
      step.classList.remove("active");
      if (i === index) step.classList.add("active");
    });

    prevBtn.style.display = index === 0 ? "none" : "inline-block";
    nextBtn.style.display = index === steps.length - 1 ? "none" : "inline-block";
  }

  nextBtn.addEventListener("click", () => {
    if (currentStep < steps.length - 1) {
      currentStep++;
      showStep(currentStep);
    }
  });

  prevBtn.addEventListener("click", () => {
    if (currentStep > 0) {
      currentStep--;
      showStep(currentStep);
    }
  });

  showStep(currentStep);

  const loanRange = document.getElementById("loanRange");
  const rangeDisplay = document.getElementById("rangeDisplay");
  const OFFSET = 50000;

  function formatCurrency(val) {
    return val.toLocaleString("en-US", {
      style: "currency",
      currency: "USD",
      minimumFractionDigits: 0,
    });
  }

  function updateRangeDisplay(value) {
    const min = Math.max(5000, value - OFFSET);
    const max = Math.min(2000000, value + OFFSET);
    if (rangeDisplay) {
      rangeDisplay.textContent = `${formatCurrency(min)} – ${formatCurrency(max)}`;
    }
  }

  if (loanRange) {
    loanRange.addEventListener("input", () => {
      updateRangeDisplay(parseInt(loanRange.value));
    });
    updateRangeDisplay(parseInt(loanRange.value));
  }
});
</script>
<!-- end Simple Custom CSS and JS -->
