.class public Lcom/supercell/titan/cy;
.super Ljava/lang/Object;


# instance fields
.field public a:Ljava/lang/String;

.field public b:Ljava/lang/String;

.field public c:I

.field final synthetic d:Lcom/supercell/titan/PurchaseManager;


# direct methods
.method public constructor <init>(Lcom/supercell/titan/PurchaseManager;)V
    .locals 1

    iput-object p1, p0, Lcom/supercell/titan/cy;->d:Lcom/supercell/titan/PurchaseManager;

    invoke-direct {p0}, Ljava/lang/Object;-><init>()V

    const-string/jumbo v0, ""

    iput-object v0, p0, Lcom/supercell/titan/cy;->a:Ljava/lang/String;

    const-string/jumbo v0, ""

    iput-object v0, p0, Lcom/supercell/titan/cy;->b:Ljava/lang/String;

    return-void
.end method
