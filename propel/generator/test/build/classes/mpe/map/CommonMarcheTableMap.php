<?php



/**
 * This class defines the structure of the 'Marche' table.
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
class CommonMarcheTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonMarcheTableMap';

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
        $this->setName('Marche');
        $this->setPhpName('CommonMarche');
        $this->setClassname('CommonMarche');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('idMarcheTrancheBudgetaire', 'Idmarchetranchebudgetaire', 'INTEGER', false, null, 0);
        $this->addColumn('numeroMarcheAnnee', 'Numeromarcheannee', 'INTEGER', false, null, 0);
        $this->addColumn('idService', 'Idservice', 'INTEGER', false, null, 0);
        $this->addColumn('nomAttributaire', 'Nomattributaire', 'VARCHAR', false, 255, null);
        $this->addColumn('dateNotification', 'Datenotification', 'DATE', true, null, '0000-00-00');
        $this->addColumn('codePostal', 'Codepostal', 'VARCHAR', false, 20, null);
        $this->addColumn('natureMarche', 'Naturemarche', 'VARCHAR', false, 30, '1');
        $this->addColumn('objetMarche', 'Objetmarche', 'CLOB', false, null, null);
        $this->addColumn('montantMarche', 'Montantmarche', 'VARCHAR', false, 50, '0');
        $this->addColumn('valide', 'Valide', 'CHAR', true, null, '0');
        $this->getColumn('valide', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('isManuel', 'Ismanuel', 'CHAR', true, null, '0');
        $this->getColumn('isManuel', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('pmePmi', 'Pmepmi', 'INTEGER', false, null, 0);
        $this->addColumn('id_decision_enveloppe', 'IdDecisionEnveloppe', 'INTEGER', true, null, null);
        $this->addColumn('ville', 'Ville', 'VARCHAR', false, 20, null);
        $this->addColumn('acronymePays_Attributaire', 'AcronymepaysAttributaire', 'VARCHAR', false, 10, null);
        $this->addColumn('pays_Attributaire', 'PaysAttributaire', 'VARCHAR', false, 50, null);
        $this->addColumn('siren_Attributaire', 'SirenAttributaire', 'VARCHAR', false, 20, null);
        $this->addColumn('nic_Attributaire', 'NicAttributaire', 'VARCHAR', false, 6, null);
        $this->addColumn('identifiantNational_Attributaire', 'IdentifiantnationalAttributaire', 'VARCHAR', false, 50, null);
        $this->addColumn('rc_ville_attributaire', 'RcVilleAttributaire', 'VARCHAR', false, 250, null);
        $this->addColumn('rc_num_attributaire', 'RcNumAttributaire', 'VARCHAR', false, 250, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonMarcheTableMap
