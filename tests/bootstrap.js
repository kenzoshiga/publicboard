// PHP 側の項目定義・初期データを読み込む(テストは PHP が返す実データに対して行う)
import { execFileSync } from "node:child_process";
import { fileURLToPath } from "node:url";

const dataPhp = fileURLToPath(new URL("../public/inc/data.php", import.meta.url));
export const { config, seedCases } = JSON.parse(
  execFileSync("php", ["-r", `require ${JSON.stringify(dataPhp)}; echo touki_bootstrap_json();`], { encoding: "utf8" }),
);
export const DAY = 86400000;
export const HOUR = 3600000;
