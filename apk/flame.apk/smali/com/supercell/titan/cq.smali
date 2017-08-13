.class Lcom/supercell/titan/cq;
.super Ljava/lang/Object;

# interfaces
.implements Ljava/lang/Runnable;


# instance fields
.field final synthetic a:Z

.field final synthetic b:Lcom/supercell/titan/cp;


# direct methods
.method constructor <init>(Lcom/supercell/titan/cp;Z)V
    .locals 0

    iput-object p1, p0, Lcom/supercell/titan/cq;->b:Lcom/supercell/titan/cp;

    iput-boolean p2, p0, Lcom/supercell/titan/cq;->a:Z

    invoke-direct {p0}, Ljava/lang/Object;-><init>()V

    return-void
.end method


# virtual methods
.method public run()V
    .locals 3

    iget-boolean v0, p0, Lcom/supercell/titan/cq;->a:Z

    iget-object v1, p0, Lcom/supercell/titan/cq;->b:Lcom/supercell/titan/cp;

    iget v1, v1, Lcom/supercell/titan/cp;->a:I

    iget-object v2, p0, Lcom/supercell/titan/cq;->b:Lcom/supercell/titan/cp;

    iget-object v2, v2, Lcom/supercell/titan/cp;->b:Lcom/supercell/titan/co;

    invoke-static {v2}, Lcom/supercell/titan/co;->a(Lcom/supercell/titan/co;)Ljava/lang/String;

    move-result-object v2

    invoke-static {v0, v1, v2}, Lcom/supercell/titan/NativeFacebookManager;->facebookLinkStatistics(ZILjava/lang/String;)V

    return-void
.end method
