<?php



/**
 * This class defines the structure of the 'demande_achat_ligne' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonDemandeAchatLigneTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonDemandeAchatLigneTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('demande_achat_ligne');
        $this->setPhpName('CommonDemandeAchatLigne');
        $this->setClassname('CommonDemandeAchatLigne');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_demande_achat_ligne', 'IdDemandeAchatLigne', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 11, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 250, null);
        $this->addColumn('numero_demande_achat', 'NumeroDemandeAchat', 'VARCHAR', true, 50, null);
        $this->addColumn('description_demande_achat', 'DescriptionDemandeAchat', 'LONGVARCHAR', true, null, null);
        $this->addColumn('numero_ligne', 'NumeroLigne', 'INTEGER', true, null, null);
        $this->addColumn('code_article', 'CodeArticle', 'VARCHAR', true, 50, null);
        $this->addColumn('description_ligne', 'DescriptionLigne', 'LONGVARCHAR', true, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, null, null);
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, null);
        $this->addColumn('lot', 'Lot', 'INTEGER', true, null, null);
        $this->addColumn('quantite', 'Quantite', 'INTEGER', false, null, null);
        $this->addColumn('unite', 'Unite', 'VARCHAR', false, 50, null);
        $this->addColumn('site', 'Site', 'VARCHAR', false, 50, null);
        $this->addColumn('port', 'Port', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonDemandeAchatLigneTableMap
