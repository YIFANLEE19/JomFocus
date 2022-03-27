const blockSite = document.getElementById("blockSite");
const saveBlockSite = document.getElementById("saveBlockSite");
const blockCheck = document.getElementById("blockCheck");

saveBlockSite.addEventListener("click", () => {
  const blocked = blockSite.value.split("\n").map(s => s.trim()).filter(Boolean);
  chrome.storage.local.set({ blocked });
});

blockCheck.addEventListener("change", (event) => {
  const enabled = event.target.checked;
  chrome.storage.local.set({ enabled });
});

window.addEventListener("DOMContentLoaded", () => {
  chrome.storage.local.get(["blocked", "enabled"], function (local) {
    const { blocked, enabled } = local;
    if (Array.isArray(blocked)) {
        blockSite.value = blocked.join("\n");
        blockCheck.checked = enabled;
    }
  });
});