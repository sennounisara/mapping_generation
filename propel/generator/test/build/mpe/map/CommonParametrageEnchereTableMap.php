<?php



/**
 * This class defines the structure of the 'Parametrage_Enchere' table.
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
class CommonParametrageEnchereTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonParametrageEnchereTableMap';

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
        $this->setName('Parametrage_Enchere');
        $this->setPhpName('CommonParametrageEnchere');
        $this->setClassname('CommonParametrageEnchere');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'Organisme', 'acronyme', true, 30, '');
        $this->addColumn('refConsultation', 'Refconsultation', 'INTEGER', false, 10, null);
        $this->addColumn('idEntiteeAssociee', 'Identiteeassociee', 'INTEGER', false, null, null);
        $this->addColumn('referenceUtilisateur', 'Referenceutilisateur', 'VARCHAR', false, 45, null);
        $this->addColumn('auteur', 'Auteur', 'VARCHAR', false, 255, null);
        $this->addColumn('idLot', 'Idlot', 'INTEGER', false, 10, null);
        $this->addColumn('objet', 'Objet', 'CLOB', false, null, null);
        $this->addColumn('dateDebut', 'Datedebut', 'TIMESTAMP', false, null, '0000-00-00 00:00:00');
        $this->addColumn('dateFin', 'Datefin', 'TIMESTAMP', false, null, '0000-00-00 00:00:00');
        $this->addColumn('dateSuspension', 'Datesuspension', 'TIMESTAMP', false, null, '0000-00-00 00:00:00');
        $this->addColumn('delaiProlongation', 'Delaiprolongation', 'INTEGER', false, null, null);
        $this->addColumn('commentaire', 'Commentaire', 'CLOB', false, null, null);
        $this->addColumn('meilleureEnchereObligatoire', 'Meilleureenchereobligatoire', 'CHAR', true, null, '0');
        $this->getColumn('meilleureEnchereObligatoire', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('typeBaremeNETC', 'Typebaremenetc', 'CHAR', true, null, '1');
        $this->getColumn('typeBaremeNETC', false)->setValueSet(array (
  0 => '1',
  1 => '2',
  2 => '3',
  3 => '4',
));
        $this->addColumn('typeBaremeEnchereGlobale', 'Typebaremeenchereglobale', 'CHAR', true, null, '1');
        $this->getColumn('typeBaremeEnchereGlobale', false)->setValueSet(array (
  0 => '1',
  1 => '2',
));
        $this->addColumn('meilleurNoteHaute', 'Meilleurnotehaute', 'CHAR', true, null, '0');
        $this->getColumn('meilleurNoteHaute', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('nbrCandidatsVisible', 'Nbrcandidatsvisible', 'CHAR', true, null, '1');
        $this->getColumn('nbrCandidatsVisible', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('listeCandidatsVisible', 'Listecandidatsvisible', 'CHAR', true, null, '1');
        $this->getColumn('listeCandidatsVisible', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('rangVisible', 'Rangvisible', 'CHAR', true, null, '1');
        $this->getColumn('rangVisible', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('meilleureOffreVisible', 'Meilleureoffrevisible', 'CHAR', true, null, '1');
        $this->getColumn('meilleureOffreVisible', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('montantReserve', 'Montantreserve', 'DOUBLE', false, null, null);
        $this->addColumn('noteMaxBaremeRelatif', 'Notemaxbaremerelatif', 'DOUBLE', false, null, null);
        $this->addColumn('coeffA', 'Coeffa', 'DOUBLE', false, null, null);
        $this->addColumn('coeffB', 'Coeffb', 'DOUBLE', false, null, null);
        $this->addColumn('coeffC', 'Coeffc', 'DOUBLE', false, null, null);
        $this->addColumn('mail', 'Mail', 'CLOB', false, null, null);
        $this->addColumn('note_entreprises', 'NoteEntreprises', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonOrganisme', 'CommonOrganisme', RelationMap::MANY_TO_ONE, array('organisme' => 'acronyme', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonParametrageEnchereReferenceRelatedByIdenchere', 'CommonParametrageEnchereReference', RelationMap::ONE_TO_MANY, array('id' => 'idEnchere', ), 'CASCADE', 'CASCADE', 'CommonParametrageEnchereReferencesRelatedByIdenchere');
        $this->addRelation('CommonParametrageEnchereReferenceRelatedByIdenchereOrganisme', 'CommonParametrageEnchereReference', RelationMap::ONE_TO_MANY, array('id' => 'idEnchere', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE', 'CommonParametrageEnchereReferencesRelatedByIdenchereOrganisme');
        $this->addRelation('CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere', 'CommonParametrageEnchereTranchesBaremeNETC', RelationMap::ONE_TO_MANY, array('id' => 'idEnchere', ), 'CASCADE', 'CASCADE', 'CommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere');
        $this->addRelation('CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme', 'CommonParametrageEnchereTranchesBaremeNETC', RelationMap::ONE_TO_MANY, array('id' => 'idEnchere', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE', 'CommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme');
    } // buildRelations()

} // CommonParametrageEnchereTableMap
