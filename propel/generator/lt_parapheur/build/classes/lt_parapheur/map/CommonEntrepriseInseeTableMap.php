<?php



/**
 * This class defines the structure of the 'EntrepriseInsee' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class CommonEntrepriseInseeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonEntrepriseInseeTableMap';

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
        $this->setName('EntrepriseInsee');
        $this->setPhpName('CommonEntrepriseInsee');
        $this->setClassname('CommonEntrepriseInsee');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 30, null);
        $this->addColumn('siren', 'Siren', 'VARCHAR', false, 9, null);
        $this->addColumn('raisonSociale', 'Raisonsociale', 'VARCHAR', false, 200, null);
        $this->addColumn('nbEtA', 'Nbeta', 'INTEGER', false, 1, null);
        $this->addColumn('etat', 'Etat', 'CHAR', false, null, null);
        $this->addColumn('etatLib', 'Etatlib', 'VARCHAR', false, 40, null);
        $this->addColumn('etatDebDate', 'Etatdebdate', 'VARCHAR', false, 20, null);
        $this->addColumn('eff3112Tr', 'Eff3112tr', 'INTEGER', false, null, null);
        $this->addColumn('eff3112TrLib', 'Eff3112trlib', 'VARCHAR', false, 200, null);
        $this->addColumn('effAn', 'Effan', 'VARCHAR', false, 10, null);
        $this->addColumn('apen', 'Apen', 'VARCHAR', false, 5, null);
        $this->addColumn('apenLib', 'Apenlib', 'VARCHAR', false, 200, null);
        $this->addColumn('cj', 'Cj', 'VARCHAR', false, 4, null);
        $this->addColumn('cjLib', 'Cjlib', 'VARCHAR', false, 200, null);
        $this->addColumn('indNDC', 'Indndc', 'CHAR', false, null, null);
        $this->addColumn('indDoublon', 'Inddoublon', 'CHAR', false, null, null);
        $this->addColumn('indPurge', 'Indpurge', 'CHAR', false, null, null);
        $this->addColumn('nicSiege', 'Nicsiege', 'VARCHAR', false, 5, '00000');
        $this->addColumn('etatSiege', 'Etatsiege', 'CHAR', false, null, null);
        $this->addColumn('etatSiegeLib', 'Etatsiegelib', 'VARCHAR', false, 10, null);
        $this->addColumn('etatDebDateSiege', 'Etatdebdatesiege', 'VARCHAR', false, 20, null);
        $this->addColumn('eff3112TrSiege', 'Eff3112trsiege', 'INTEGER', false, null, null);
        $this->addColumn('eff3112TrSiegeLib', 'Eff3112trsiegelib', 'VARCHAR', false, 200, null);
        $this->addColumn('effAnSiege', 'Effansiege', 'VARCHAR', false, 10, null);
        $this->addColumn('apetSiege', 'Apetsiege', 'VARCHAR', false, 5, null);
        $this->addColumn('apetSiegeLib', 'Apetsiegelib', 'VARCHAR', false, 200, null);
        $this->addColumn('trtDerDateSiege', 'Trtderdatesiege', 'VARCHAR', false, 20, null);
        $this->addColumn('adrEtVoieNum', 'Adretvoienum', 'VARCHAR', false, 100, null);
        $this->addColumn('adrEtVoieType', 'Adretvoietype', 'VARCHAR', false, 100, null);
        $this->addColumn('adrEtVoieLib', 'Adretvoielib', 'VARCHAR', false, 100, null);
        $this->addColumn('adrEtDepCom', 'Adretdepcom', 'VARCHAR', false, 100, null);
        $this->addColumn('adrEtComLib', 'Adretcomlib', 'VARCHAR', false, 100, null);
        $this->addColumn('adrEtCodePost', 'Adretcodepost', 'VARCHAR', false, 100, null);
        $this->addColumn('adrEtPost1', 'Adretpost1', 'VARCHAR', false, 200, null);
        $this->addColumn('adrEtPost2', 'Adretpost2', 'VARCHAR', false, 200, null);
        $this->addColumn('adrEtPost3', 'Adretpost3', 'VARCHAR', false, 200, null);
        $this->addColumn('nic', 'Nic', 'VARCHAR', false, 5, '00000');
        $this->addColumn('etatEt', 'Etatet', 'CHAR', false, 2, null);
        $this->addColumn('etatDebDateEt', 'Etatdebdateet', 'VARCHAR', false, 15, null);
        $this->addColumn('catEt', 'Catet', 'CHAR', false, 2, null);
        $this->addColumn('catEtLib', 'Catetlib', 'VARCHAR', false, 200, null);
        $this->addColumn('eff3112TrEt', 'Eff3112tret', 'CHAR', false, 2, null);
        $this->addColumn('eff3112TrEtLib', 'Eff3112tretlib', 'VARCHAR', false, 100, null);
        $this->addColumn('effAnEt', 'Effanet', 'VARCHAR', false, 15, null);
        $this->addColumn('apet', 'Apet', 'VARCHAR', false, 5, null);
        $this->addColumn('apetLib', 'Apetlib', 'VARCHAR', false, 200, null);
        $this->addColumn('trtDerDateEt', 'Trtderdateet', 'VARCHAR', false, 15, null);
        $this->addColumn('etatEtLib', 'Etatetlib', 'VARCHAR', false, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonEntrepriseInseeTableMap
