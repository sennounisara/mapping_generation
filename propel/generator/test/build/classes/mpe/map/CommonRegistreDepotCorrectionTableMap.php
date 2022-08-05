<?php



/**
 * This class defines the structure of the 'registre_depot_correction' table.
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
class CommonRegistreDepotCorrectionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonRegistreDepotCorrectionTableMap';

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
        $this->setName('registre_depot_correction');
        $this->setPhpName('CommonRegistreDepotCorrection');
        $this->setClassname('CommonRegistreDepotCorrection');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('id_offre', 'IdOffre', 'INTEGER', true, null, null);
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, 0);
        $this->addColumn('nom_entreprise', 'NomEntreprise', 'LONGVARCHAR', true, null, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', false, 80, null);
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', false, 80, null);
        $this->addColumn('mail', 'Mail', 'VARCHAR', false, 100, null);
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', false, 100, null);
        $this->addColumn('adresse2', 'Adresse2', 'VARCHAR', false, 100, null);
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', false, 20, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 30, null);
        $this->addColumn('code_postal', 'CodePostal', 'VARCHAR', false, 5, null);
        $this->addColumn('ville', 'Ville', 'VARCHAR', false, 50, null);
        $this->addColumn('pays', 'Pays', 'VARCHAR', false, 50, null);
        $this->addColumn('ville_rc', 'VilleRc', 'VARCHAR', false, 14, null);
        $this->addColumn('numero_rc', 'NumeroRc', 'VARCHAR', false, 14, null);
        $this->addColumn('identifiant_national', 'IdentifiantNational', 'VARCHAR', false, 20, null);
        $this->addColumn('ifu_entreprise', 'IfuEntreprise', 'VARCHAR', false, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonRegistreDepotCorrectionTableMap
