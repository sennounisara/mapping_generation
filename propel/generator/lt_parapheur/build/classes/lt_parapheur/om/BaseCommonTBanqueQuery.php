<?php


/**
 * Base class that represents a query for the 't_banque' table.
 *
 * 
 *
 * @method CommonTBanqueQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTBanqueQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method CommonTBanqueQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonTBanqueQuery orderBySigle($order = Criteria::ASC) Order by the sigle column
 * @method CommonTBanqueQuery orderByMode($order = Criteria::ASC) Order by the mode column
 * @method CommonTBanqueQuery orderByAdresseSiege($order = Criteria::ASC) Order by the adresse_siege column
 * @method CommonTBanqueQuery orderByVilleSiege($order = Criteria::ASC) Order by the ville_siege column
 * @method CommonTBanqueQuery orderByIdRefVille($order = Criteria::ASC) Order by the id_ref_ville column
 * @method CommonTBanqueQuery orderByPositionDebutCodeAgence($order = Criteria::ASC) Order by the position_debut_code_agence column
 * @method CommonTBanqueQuery orderByTailleCodeAgence($order = Criteria::ASC) Order by the taille_code_agence column
 * @method CommonTBanqueQuery orderByPositionDebutCodeVille($order = Criteria::ASC) Order by the position_debut_code_ville column
 * @method CommonTBanqueQuery orderByTailleCodeVille($order = Criteria::ASC) Order by the taille_code_ville column
 * @method CommonTBanqueQuery orderByAffichageCompteVirement($order = Criteria::ASC) Order by the affichage_compte_virement column
 * @method CommonTBanqueQuery orderByConfigIdModeleDemandeCaution($order = Criteria::ASC) Order by the config_id_modele_demande_caution column
 * @method CommonTBanqueQuery orderByNumeroAgrement($order = Criteria::ASC) Order by the numero_agrement column
 * @method CommonTBanqueQuery orderByDateAgrement($order = Criteria::ASC) Order by the date_agrement column
 * @method CommonTBanqueQuery orderByConfigGenererReferenceCaution($order = Criteria::ASC) Order by the config_generer_reference_caution column
 * @method CommonTBanqueQuery orderByConfigIdDocumentModele($order = Criteria::ASC) Order by the config_id_document_modele column
 * @method CommonTBanqueQuery orderByConfigIdModeleDemandeRestitution($order = Criteria::ASC) Order by the config_id_modele_demande_restitution column
 *
 * @method CommonTBanqueQuery groupById() Group by the id column
 * @method CommonTBanqueQuery groupByCode() Group by the code column
 * @method CommonTBanqueQuery groupByLibelle() Group by the libelle column
 * @method CommonTBanqueQuery groupBySigle() Group by the sigle column
 * @method CommonTBanqueQuery groupByMode() Group by the mode column
 * @method CommonTBanqueQuery groupByAdresseSiege() Group by the adresse_siege column
 * @method CommonTBanqueQuery groupByVilleSiege() Group by the ville_siege column
 * @method CommonTBanqueQuery groupByIdRefVille() Group by the id_ref_ville column
 * @method CommonTBanqueQuery groupByPositionDebutCodeAgence() Group by the position_debut_code_agence column
 * @method CommonTBanqueQuery groupByTailleCodeAgence() Group by the taille_code_agence column
 * @method CommonTBanqueQuery groupByPositionDebutCodeVille() Group by the position_debut_code_ville column
 * @method CommonTBanqueQuery groupByTailleCodeVille() Group by the taille_code_ville column
 * @method CommonTBanqueQuery groupByAffichageCompteVirement() Group by the affichage_compte_virement column
 * @method CommonTBanqueQuery groupByConfigIdModeleDemandeCaution() Group by the config_id_modele_demande_caution column
 * @method CommonTBanqueQuery groupByNumeroAgrement() Group by the numero_agrement column
 * @method CommonTBanqueQuery groupByDateAgrement() Group by the date_agrement column
 * @method CommonTBanqueQuery groupByConfigGenererReferenceCaution() Group by the config_generer_reference_caution column
 * @method CommonTBanqueQuery groupByConfigIdDocumentModele() Group by the config_id_document_modele column
 * @method CommonTBanqueQuery groupByConfigIdModeleDemandeRestitution() Group by the config_id_modele_demande_restitution column
 *
 * @method CommonTBanqueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTBanqueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTBanqueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTBanqueQuery leftJoinCommonTCompteBancaire($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCompteBancaire relation
 * @method CommonTBanqueQuery rightJoinCommonTCompteBancaire($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCompteBancaire relation
 * @method CommonTBanqueQuery innerJoinCommonTCompteBancaire($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCompteBancaire relation
 *
 * @method CommonTBanque findOne(PropelPDO $con = null) Return the first CommonTBanque matching the query
 * @method CommonTBanque findOneOrCreate(PropelPDO $con = null) Return the first CommonTBanque matching the query, or a new CommonTBanque object populated from the query conditions when no match is found
 *
 * @method CommonTBanque findOneByCode(string $code) Return the first CommonTBanque filtered by the code column
 * @method CommonTBanque findOneByLibelle(string $libelle) Return the first CommonTBanque filtered by the libelle column
 * @method CommonTBanque findOneBySigle(string $sigle) Return the first CommonTBanque filtered by the sigle column
 * @method CommonTBanque findOneByMode(string $mode) Return the first CommonTBanque filtered by the mode column
 * @method CommonTBanque findOneByAdresseSiege(string $adresse_siege) Return the first CommonTBanque filtered by the adresse_siege column
 * @method CommonTBanque findOneByVilleSiege(string $ville_siege) Return the first CommonTBanque filtered by the ville_siege column
 * @method CommonTBanque findOneByIdRefVille(int $id_ref_ville) Return the first CommonTBanque filtered by the id_ref_ville column
 * @method CommonTBanque findOneByPositionDebutCodeAgence(int $position_debut_code_agence) Return the first CommonTBanque filtered by the position_debut_code_agence column
 * @method CommonTBanque findOneByTailleCodeAgence(int $taille_code_agence) Return the first CommonTBanque filtered by the taille_code_agence column
 * @method CommonTBanque findOneByPositionDebutCodeVille(int $position_debut_code_ville) Return the first CommonTBanque filtered by the position_debut_code_ville column
 * @method CommonTBanque findOneByTailleCodeVille(int $taille_code_ville) Return the first CommonTBanque filtered by the taille_code_ville column
 * @method CommonTBanque findOneByAffichageCompteVirement(string $affichage_compte_virement) Return the first CommonTBanque filtered by the affichage_compte_virement column
 * @method CommonTBanque findOneByConfigIdModeleDemandeCaution(int $config_id_modele_demande_caution) Return the first CommonTBanque filtered by the config_id_modele_demande_caution column
 * @method CommonTBanque findOneByNumeroAgrement(string $numero_agrement) Return the first CommonTBanque filtered by the numero_agrement column
 * @method CommonTBanque findOneByDateAgrement(string $date_agrement) Return the first CommonTBanque filtered by the date_agrement column
 * @method CommonTBanque findOneByConfigGenererReferenceCaution(string $config_generer_reference_caution) Return the first CommonTBanque filtered by the config_generer_reference_caution column
 * @method CommonTBanque findOneByConfigIdDocumentModele(int $config_id_document_modele) Return the first CommonTBanque filtered by the config_id_document_modele column
 * @method CommonTBanque findOneByConfigIdModeleDemandeRestitution(int $config_id_modele_demande_restitution) Return the first CommonTBanque filtered by the config_id_modele_demande_restitution column
 *
 * @method array findById(int $id) Return CommonTBanque objects filtered by the id column
 * @method array findByCode(string $code) Return CommonTBanque objects filtered by the code column
 * @method array findByLibelle(string $libelle) Return CommonTBanque objects filtered by the libelle column
 * @method array findBySigle(string $sigle) Return CommonTBanque objects filtered by the sigle column
 * @method array findByMode(string $mode) Return CommonTBanque objects filtered by the mode column
 * @method array findByAdresseSiege(string $adresse_siege) Return CommonTBanque objects filtered by the adresse_siege column
 * @method array findByVilleSiege(string $ville_siege) Return CommonTBanque objects filtered by the ville_siege column
 * @method array findByIdRefVille(int $id_ref_ville) Return CommonTBanque objects filtered by the id_ref_ville column
 * @method array findByPositionDebutCodeAgence(int $position_debut_code_agence) Return CommonTBanque objects filtered by the position_debut_code_agence column
 * @method array findByTailleCodeAgence(int $taille_code_agence) Return CommonTBanque objects filtered by the taille_code_agence column
 * @method array findByPositionDebutCodeVille(int $position_debut_code_ville) Return CommonTBanque objects filtered by the position_debut_code_ville column
 * @method array findByTailleCodeVille(int $taille_code_ville) Return CommonTBanque objects filtered by the taille_code_ville column
 * @method array findByAffichageCompteVirement(string $affichage_compte_virement) Return CommonTBanque objects filtered by the affichage_compte_virement column
 * @method array findByConfigIdModeleDemandeCaution(int $config_id_modele_demande_caution) Return CommonTBanque objects filtered by the config_id_modele_demande_caution column
 * @method array findByNumeroAgrement(string $numero_agrement) Return CommonTBanque objects filtered by the numero_agrement column
 * @method array findByDateAgrement(string $date_agrement) Return CommonTBanque objects filtered by the date_agrement column
 * @method array findByConfigGenererReferenceCaution(string $config_generer_reference_caution) Return CommonTBanque objects filtered by the config_generer_reference_caution column
 * @method array findByConfigIdDocumentModele(int $config_id_document_modele) Return CommonTBanque objects filtered by the config_id_document_modele column
 * @method array findByConfigIdModeleDemandeRestitution(int $config_id_modele_demande_restitution) Return CommonTBanque objects filtered by the config_id_modele_demande_restitution column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTBanqueQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTBanqueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTBanque', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTBanqueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTBanqueQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTBanqueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTBanqueQuery) {
            return $criteria;
        }
        $query = new CommonTBanqueQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTBanque|CommonTBanque[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTBanquePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTBanquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonTBanque A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonTBanque A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `code`, `libelle`, `sigle`, `mode`, `adresse_siege`, `ville_siege`, `id_ref_ville`, `position_debut_code_agence`, `taille_code_agence`, `position_debut_code_ville`, `taille_code_ville`, `affichage_compte_virement`, `config_id_modele_demande_caution`, `numero_agrement`, `date_agrement`, `config_generer_reference_caution`, `config_id_document_modele`, `config_id_modele_demande_restitution` FROM `t_banque` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTBanque();
            $obj->hydrate($row);
            CommonTBanquePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonTBanque|CommonTBanque[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonTBanque[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTBanquePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTBanquePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTBanquePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTBanquePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%'); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $code)) {
                $code = str_replace('*', '%', $code);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::CODE, $code, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the sigle column
     *
     * Example usage:
     * <code>
     * $query->filterBySigle('fooValue');   // WHERE sigle = 'fooValue'
     * $query->filterBySigle('%fooValue%'); // WHERE sigle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterBySigle($sigle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sigle)) {
                $sigle = str_replace('*', '%', $sigle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::SIGLE, $sigle, $comparison);
    }

    /**
     * Filter the query on the mode column
     *
     * Example usage:
     * <code>
     * $query->filterByMode('fooValue');   // WHERE mode = 'fooValue'
     * $query->filterByMode('%fooValue%'); // WHERE mode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByMode($mode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mode)) {
                $mode = str_replace('*', '%', $mode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::MODE, $mode, $comparison);
    }

    /**
     * Filter the query on the adresse_siege column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseSiege('fooValue');   // WHERE adresse_siege = 'fooValue'
     * $query->filterByAdresseSiege('%fooValue%'); // WHERE adresse_siege LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseSiege The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByAdresseSiege($adresseSiege = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseSiege)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseSiege)) {
                $adresseSiege = str_replace('*', '%', $adresseSiege);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::ADRESSE_SIEGE, $adresseSiege, $comparison);
    }

    /**
     * Filter the query on the ville_siege column
     *
     * Example usage:
     * <code>
     * $query->filterByVilleSiege('fooValue');   // WHERE ville_siege = 'fooValue'
     * $query->filterByVilleSiege('%fooValue%'); // WHERE ville_siege LIKE '%fooValue%'
     * </code>
     *
     * @param     string $villeSiege The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByVilleSiege($villeSiege = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($villeSiege)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $villeSiege)) {
                $villeSiege = str_replace('*', '%', $villeSiege);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::VILLE_SIEGE, $villeSiege, $comparison);
    }

    /**
     * Filter the query on the id_ref_ville column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRefVille(1234); // WHERE id_ref_ville = 1234
     * $query->filterByIdRefVille(array(12, 34)); // WHERE id_ref_ville IN (12, 34)
     * $query->filterByIdRefVille(array('min' => 12)); // WHERE id_ref_ville >= 12
     * $query->filterByIdRefVille(array('max' => 12)); // WHERE id_ref_ville <= 12
     * </code>
     *
     * @param     mixed $idRefVille The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByIdRefVille($idRefVille = null, $comparison = null)
    {
        if (is_array($idRefVille)) {
            $useMinMax = false;
            if (isset($idRefVille['min'])) {
                $this->addUsingAlias(CommonTBanquePeer::ID_REF_VILLE, $idRefVille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRefVille['max'])) {
                $this->addUsingAlias(CommonTBanquePeer::ID_REF_VILLE, $idRefVille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::ID_REF_VILLE, $idRefVille, $comparison);
    }

    /**
     * Filter the query on the position_debut_code_agence column
     *
     * Example usage:
     * <code>
     * $query->filterByPositionDebutCodeAgence(1234); // WHERE position_debut_code_agence = 1234
     * $query->filterByPositionDebutCodeAgence(array(12, 34)); // WHERE position_debut_code_agence IN (12, 34)
     * $query->filterByPositionDebutCodeAgence(array('min' => 12)); // WHERE position_debut_code_agence >= 12
     * $query->filterByPositionDebutCodeAgence(array('max' => 12)); // WHERE position_debut_code_agence <= 12
     * </code>
     *
     * @param     mixed $positionDebutCodeAgence The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByPositionDebutCodeAgence($positionDebutCodeAgence = null, $comparison = null)
    {
        if (is_array($positionDebutCodeAgence)) {
            $useMinMax = false;
            if (isset($positionDebutCodeAgence['min'])) {
                $this->addUsingAlias(CommonTBanquePeer::POSITION_DEBUT_CODE_AGENCE, $positionDebutCodeAgence['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($positionDebutCodeAgence['max'])) {
                $this->addUsingAlias(CommonTBanquePeer::POSITION_DEBUT_CODE_AGENCE, $positionDebutCodeAgence['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::POSITION_DEBUT_CODE_AGENCE, $positionDebutCodeAgence, $comparison);
    }

    /**
     * Filter the query on the taille_code_agence column
     *
     * Example usage:
     * <code>
     * $query->filterByTailleCodeAgence(1234); // WHERE taille_code_agence = 1234
     * $query->filterByTailleCodeAgence(array(12, 34)); // WHERE taille_code_agence IN (12, 34)
     * $query->filterByTailleCodeAgence(array('min' => 12)); // WHERE taille_code_agence >= 12
     * $query->filterByTailleCodeAgence(array('max' => 12)); // WHERE taille_code_agence <= 12
     * </code>
     *
     * @param     mixed $tailleCodeAgence The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByTailleCodeAgence($tailleCodeAgence = null, $comparison = null)
    {
        if (is_array($tailleCodeAgence)) {
            $useMinMax = false;
            if (isset($tailleCodeAgence['min'])) {
                $this->addUsingAlias(CommonTBanquePeer::TAILLE_CODE_AGENCE, $tailleCodeAgence['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tailleCodeAgence['max'])) {
                $this->addUsingAlias(CommonTBanquePeer::TAILLE_CODE_AGENCE, $tailleCodeAgence['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::TAILLE_CODE_AGENCE, $tailleCodeAgence, $comparison);
    }

    /**
     * Filter the query on the position_debut_code_ville column
     *
     * Example usage:
     * <code>
     * $query->filterByPositionDebutCodeVille(1234); // WHERE position_debut_code_ville = 1234
     * $query->filterByPositionDebutCodeVille(array(12, 34)); // WHERE position_debut_code_ville IN (12, 34)
     * $query->filterByPositionDebutCodeVille(array('min' => 12)); // WHERE position_debut_code_ville >= 12
     * $query->filterByPositionDebutCodeVille(array('max' => 12)); // WHERE position_debut_code_ville <= 12
     * </code>
     *
     * @param     mixed $positionDebutCodeVille The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByPositionDebutCodeVille($positionDebutCodeVille = null, $comparison = null)
    {
        if (is_array($positionDebutCodeVille)) {
            $useMinMax = false;
            if (isset($positionDebutCodeVille['min'])) {
                $this->addUsingAlias(CommonTBanquePeer::POSITION_DEBUT_CODE_VILLE, $positionDebutCodeVille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($positionDebutCodeVille['max'])) {
                $this->addUsingAlias(CommonTBanquePeer::POSITION_DEBUT_CODE_VILLE, $positionDebutCodeVille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::POSITION_DEBUT_CODE_VILLE, $positionDebutCodeVille, $comparison);
    }

    /**
     * Filter the query on the taille_code_ville column
     *
     * Example usage:
     * <code>
     * $query->filterByTailleCodeVille(1234); // WHERE taille_code_ville = 1234
     * $query->filterByTailleCodeVille(array(12, 34)); // WHERE taille_code_ville IN (12, 34)
     * $query->filterByTailleCodeVille(array('min' => 12)); // WHERE taille_code_ville >= 12
     * $query->filterByTailleCodeVille(array('max' => 12)); // WHERE taille_code_ville <= 12
     * </code>
     *
     * @param     mixed $tailleCodeVille The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByTailleCodeVille($tailleCodeVille = null, $comparison = null)
    {
        if (is_array($tailleCodeVille)) {
            $useMinMax = false;
            if (isset($tailleCodeVille['min'])) {
                $this->addUsingAlias(CommonTBanquePeer::TAILLE_CODE_VILLE, $tailleCodeVille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tailleCodeVille['max'])) {
                $this->addUsingAlias(CommonTBanquePeer::TAILLE_CODE_VILLE, $tailleCodeVille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::TAILLE_CODE_VILLE, $tailleCodeVille, $comparison);
    }

    /**
     * Filter the query on the affichage_compte_virement column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageCompteVirement('fooValue');   // WHERE affichage_compte_virement = 'fooValue'
     * $query->filterByAffichageCompteVirement('%fooValue%'); // WHERE affichage_compte_virement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichageCompteVirement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByAffichageCompteVirement($affichageCompteVirement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichageCompteVirement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichageCompteVirement)) {
                $affichageCompteVirement = str_replace('*', '%', $affichageCompteVirement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::AFFICHAGE_COMPTE_VIREMENT, $affichageCompteVirement, $comparison);
    }

    /**
     * Filter the query on the config_id_modele_demande_caution column
     *
     * Example usage:
     * <code>
     * $query->filterByConfigIdModeleDemandeCaution(1234); // WHERE config_id_modele_demande_caution = 1234
     * $query->filterByConfigIdModeleDemandeCaution(array(12, 34)); // WHERE config_id_modele_demande_caution IN (12, 34)
     * $query->filterByConfigIdModeleDemandeCaution(array('min' => 12)); // WHERE config_id_modele_demande_caution >= 12
     * $query->filterByConfigIdModeleDemandeCaution(array('max' => 12)); // WHERE config_id_modele_demande_caution <= 12
     * </code>
     *
     * @param     mixed $configIdModeleDemandeCaution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByConfigIdModeleDemandeCaution($configIdModeleDemandeCaution = null, $comparison = null)
    {
        if (is_array($configIdModeleDemandeCaution)) {
            $useMinMax = false;
            if (isset($configIdModeleDemandeCaution['min'])) {
                $this->addUsingAlias(CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_CAUTION, $configIdModeleDemandeCaution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($configIdModeleDemandeCaution['max'])) {
                $this->addUsingAlias(CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_CAUTION, $configIdModeleDemandeCaution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_CAUTION, $configIdModeleDemandeCaution, $comparison);
    }

    /**
     * Filter the query on the numero_agrement column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroAgrement('fooValue');   // WHERE numero_agrement = 'fooValue'
     * $query->filterByNumeroAgrement('%fooValue%'); // WHERE numero_agrement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroAgrement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByNumeroAgrement($numeroAgrement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroAgrement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroAgrement)) {
                $numeroAgrement = str_replace('*', '%', $numeroAgrement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::NUMERO_AGREMENT, $numeroAgrement, $comparison);
    }

    /**
     * Filter the query on the date_agrement column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAgrement('2011-03-14'); // WHERE date_agrement = '2011-03-14'
     * $query->filterByDateAgrement('now'); // WHERE date_agrement = '2011-03-14'
     * $query->filterByDateAgrement(array('max' => 'yesterday')); // WHERE date_agrement > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateAgrement The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByDateAgrement($dateAgrement = null, $comparison = null)
    {
        if (is_array($dateAgrement)) {
            $useMinMax = false;
            if (isset($dateAgrement['min'])) {
                $this->addUsingAlias(CommonTBanquePeer::DATE_AGREMENT, $dateAgrement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateAgrement['max'])) {
                $this->addUsingAlias(CommonTBanquePeer::DATE_AGREMENT, $dateAgrement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::DATE_AGREMENT, $dateAgrement, $comparison);
    }

    /**
     * Filter the query on the config_generer_reference_caution column
     *
     * Example usage:
     * <code>
     * $query->filterByConfigGenererReferenceCaution('fooValue');   // WHERE config_generer_reference_caution = 'fooValue'
     * $query->filterByConfigGenererReferenceCaution('%fooValue%'); // WHERE config_generer_reference_caution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $configGenererReferenceCaution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByConfigGenererReferenceCaution($configGenererReferenceCaution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($configGenererReferenceCaution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $configGenererReferenceCaution)) {
                $configGenererReferenceCaution = str_replace('*', '%', $configGenererReferenceCaution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::CONFIG_GENERER_REFERENCE_CAUTION, $configGenererReferenceCaution, $comparison);
    }

    /**
     * Filter the query on the config_id_document_modele column
     *
     * Example usage:
     * <code>
     * $query->filterByConfigIdDocumentModele(1234); // WHERE config_id_document_modele = 1234
     * $query->filterByConfigIdDocumentModele(array(12, 34)); // WHERE config_id_document_modele IN (12, 34)
     * $query->filterByConfigIdDocumentModele(array('min' => 12)); // WHERE config_id_document_modele >= 12
     * $query->filterByConfigIdDocumentModele(array('max' => 12)); // WHERE config_id_document_modele <= 12
     * </code>
     *
     * @param     mixed $configIdDocumentModele The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByConfigIdDocumentModele($configIdDocumentModele = null, $comparison = null)
    {
        if (is_array($configIdDocumentModele)) {
            $useMinMax = false;
            if (isset($configIdDocumentModele['min'])) {
                $this->addUsingAlias(CommonTBanquePeer::CONFIG_ID_DOCUMENT_MODELE, $configIdDocumentModele['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($configIdDocumentModele['max'])) {
                $this->addUsingAlias(CommonTBanquePeer::CONFIG_ID_DOCUMENT_MODELE, $configIdDocumentModele['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::CONFIG_ID_DOCUMENT_MODELE, $configIdDocumentModele, $comparison);
    }

    /**
     * Filter the query on the config_id_modele_demande_restitution column
     *
     * Example usage:
     * <code>
     * $query->filterByConfigIdModeleDemandeRestitution(1234); // WHERE config_id_modele_demande_restitution = 1234
     * $query->filterByConfigIdModeleDemandeRestitution(array(12, 34)); // WHERE config_id_modele_demande_restitution IN (12, 34)
     * $query->filterByConfigIdModeleDemandeRestitution(array('min' => 12)); // WHERE config_id_modele_demande_restitution >= 12
     * $query->filterByConfigIdModeleDemandeRestitution(array('max' => 12)); // WHERE config_id_modele_demande_restitution <= 12
     * </code>
     *
     * @param     mixed $configIdModeleDemandeRestitution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function filterByConfigIdModeleDemandeRestitution($configIdModeleDemandeRestitution = null, $comparison = null)
    {
        if (is_array($configIdModeleDemandeRestitution)) {
            $useMinMax = false;
            if (isset($configIdModeleDemandeRestitution['min'])) {
                $this->addUsingAlias(CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_RESTITUTION, $configIdModeleDemandeRestitution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($configIdModeleDemandeRestitution['max'])) {
                $this->addUsingAlias(CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_RESTITUTION, $configIdModeleDemandeRestitution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_RESTITUTION, $configIdModeleDemandeRestitution, $comparison);
    }

    /**
     * Filter the query by a related CommonTCompteBancaire object
     *
     * @param   CommonTCompteBancaire|PropelObjectCollection $commonTCompteBancaire  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTBanqueQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCompteBancaire($commonTCompteBancaire, $comparison = null)
    {
        if ($commonTCompteBancaire instanceof CommonTCompteBancaire) {
            return $this
                ->addUsingAlias(CommonTBanquePeer::ID, $commonTCompteBancaire->getIdBanque(), $comparison);
        } elseif ($commonTCompteBancaire instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCompteBancaireQuery()
                ->filterByPrimaryKeys($commonTCompteBancaire->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCompteBancaire() only accepts arguments of type CommonTCompteBancaire or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCompteBancaire relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function joinCommonTCompteBancaire($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCompteBancaire');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonTCompteBancaire');
        }

        return $this;
    }

    /**
     * Use the CommonTCompteBancaire relation CommonTCompteBancaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCompteBancaireQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCompteBancaireQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCompteBancaire($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCompteBancaire', 'CommonTCompteBancaireQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTBanque $commonTBanque Object to remove from the list of results
     *
     * @return CommonTBanqueQuery The current query, for fluid interface
     */
    public function prune($commonTBanque = null)
    {
        if ($commonTBanque) {
            $this->addUsingAlias(CommonTBanquePeer::ID, $commonTBanque->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
