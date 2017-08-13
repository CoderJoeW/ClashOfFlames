.class Lcom/supercell/titan/dg;
.super Ljava/lang/Thread;


# instance fields
.field final synthetic a:Lcom/supercell/titan/cz;

.field final synthetic b:Lcom/supercell/titan/da;


# direct methods
.method constructor <init>(Lcom/supercell/titan/da;Lcom/supercell/titan/cz;)V
    .locals 0

    iput-object p1, p0, Lcom/supercell/titan/dg;->b:Lcom/supercell/titan/da;

    iput-object p2, p0, Lcom/supercell/titan/dg;->a:Lcom/supercell/titan/cz;

    invoke-direct {p0}, Ljava/lang/Thread;-><init>()V

    return-void
.end method


# virtual methods
.method public run()V
    .locals 2

    iget-object v0, p0, Lcom/supercell/titan/dg;->b:Lcom/supercell/titan/da;

    iget-object v1, p0, Lcom/supercell/titan/dg;->a:Lcom/supercell/titan/cz;

    invoke-static {v0, v1}, Lcom/supercell/titan/da;->a(Lcom/supercell/titan/da;Lcom/supercell/titan/cz;)V

    return-void
.end method
