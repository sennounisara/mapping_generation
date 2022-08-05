<?php


/**
 * Base class that represents a query for the 'theme' table.
 *
 * 
 *
 * @method ThemeQuery orderByIdTheme($order = Criteria::ASC) Order by the ID_THEME column
 * @method ThemeQuery orderByLibelleThemeFr($order = Criteria::ASC) Order by the LIBELLE_THEME_FR column
 * @method ThemeQuery orderByLibelleThemeAr($order = Criteria::ASC) Order by the LIBELLE_THEME_AR column
 * @method ThemeQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method ThemeQuery orderByVisibleTiers($order = Criteria::ASC) Order by the VISIBLE_TIERS column
 * @method ThemeQuery orderByDateModification($order = Criteria::ASC) Order by the DATE_MODIFICATION column
 * @method ThemeQuery orderByTypeTheme($order = Criteria::ASC) Order by the TYPE_THEME column
 * @method ThemeQuery orderByIdCircuitValidation($order = Criteria::ASC) Order by the ID_CIRCUIT_VALIDATION column
 * @method ThemeQuery orderByEntitesAutorisees($order = Criteria::ASC) Order by the ENTITES_AUTORISEES column
 * @method ThemeQuery orderByCalculEntitesAutorisees($order = Criteria::ASC) Order by the CALCUL_ENTITES_AUTORISEES column
 * @method ThemeQuery orderByTypeDemande($order = Criteria::ASC) Order by the TYPE_DEMANDE column
 * @method ThemeQuery orderByIdExterne($order = Criteria::ASC) Order by the ID_EXTERNE column
 * @method ThemeQuery orderByAideText($order = Criteria::ASC) Order by the AIDE_TEXT column
 * @method ThemeQuery orderByDelai($order = Criteria::ASC) Order by the DELAI column
 * @method ThemeQuery orderByVisibleDemandeur($order = Criteria::ASC) Order by the VISIBLE_DEMANDEUR column
 * @method ThemeQuery orderByTypeDelai($order = Criteria::ASC) Order by the TYPE_DELAI column
 *
 * @method ThemeQuery groupByIdTheme() Group by the ID_THEME column
 * @method ThemeQuery groupByLibelleThemeFr() Group by the LIBELLE_THEME_FR column
 * @method ThemeQuery groupByLibelleThemeAr() Group by the LIBELLE_THEME_AR column
 * @method ThemeQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method ThemeQuery groupByVisibleTiers() Group by the VISIBLE_TIERS column
 * @method ThemeQuery groupByDateModification() Group by the DATE_MODIFICATION column
 * @method ThemeQuery groupByTypeTheme() Group by the TYPE_THEME column
 * @method ThemeQuery groupByIdCircuitValidation() Group by the ID_CIRCUIT_VALIDATION column
 * @method ThemeQuery groupByEntitesAutorisees() Group by the ENTITES_AUTORISEES column
 * @method ThemeQuery groupByCalculEntitesAutorisees() Group by the CALCUL_ENTITES_AUTORISEES column
 * @method ThemeQuery groupByTypeDemande() Group by the TYPE_DEMANDE column
 * @method ThemeQuery groupByIdExterne() Group by the ID_EXTERNE column
 * @method ThemeQuery groupByAideText() Group by the AIDE_TEXT column
 * @method ThemeQuery groupByDelai() Group by the DELAI column
 * @method ThemeQuery groupByVisibleDemandeur() Group by the VISIBLE_DEMANDEUR column
 * @method ThemeQuery groupByTypeDelai() Group by the TYPE_DELAI column
 *
 * @method ThemeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ThemeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ThemeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Theme findOne(PropelPDO $con = null) Return the first Theme matching the query
 * @method Theme findOneOrCreate(PropelPDO $con = null) Return the first Theme matching the query, or a new Theme object populated from the query conditions when no match is found
 *
 * @method Theme findOneByLibelleThemeFr(string $LIBELLE_THEME_FR) Return the first Theme filtered by the LIBELLE_THEME_FR column
 * @method Theme findOneByLibelleThemeAr(string $LIBELLE_THEME_AR) Return the first Theme filtered by the LIBELLE_THEME_AR column
 * @method Theme findOneByIdEntite(int $ID_ENTITE) Return the first Theme filtered by the ID_ENTITE column
 * @method Theme findOneByVisibleTiers(string $VISIBLE_TIERS) Return the first Theme filtered by the VISIBLE_TIERS column
 * @method Theme findOneByDateModification(string $DATE_MODIFICATION) Return the first Theme filtered by the DATE_MODIFICATION column
 * @method Theme findOneByTypeTheme(int $TYPE_THEME) Return the first Theme filtered by the TYPE_THEME column
 * @method Theme findOneByIdCircuitValidation(int $ID_CIRCUIT_VALIDATION) Return the first Theme filtered by the ID_CIRCUIT_VALIDATION column
 * @method Theme findOneByEntitesAutorisees(string $ENTITES_AUTORISEES) Return the first Theme filtered by the ENTITES_AUTORISEES column
 * @method Theme findOneByCalculEntitesAutorisees(string $CALCUL_ENTITES_AUTORISEES) Return the first Theme filtered by the CALCUL_ENTITES_AUTORISEES column
 * @method Theme findOneByTypeDemande(int $TYPE_DEMANDE) Return the first Theme filtered by the TYPE_DEMANDE column
 * @method Theme findOneByIdExterne(int $ID_EXTERNE) Return the first Theme filtered by the ID_EXTERNE column
 * @method Theme findOneByAideText(string $AIDE_TEXT) Return the first Theme filtered by the AIDE_TEXT column
 * @method Theme findOneByDelai(int $DELAI) Return the first Theme filtered by the DELAI column
 * @method Theme findOneByVisibleDemandeur(string $VISIBLE_DEMANDEUR) Return the first Theme filtered by the VISIBLE_DEMANDEUR column
 * @method Theme findOneByTypeDelai(string $TYPE_DELAI) Return the first Theme filtered by the TYPE_DELAI column
 *
 * @method array findByIdTheme(int $ID_THEME) Return Theme objects filtered by the ID_THEME column
 * @method array findByLibelleThemeFr(string $LIBELLE_THEME_FR) Return Theme objects filtered by the LIBELLE_THEME_FR column
 * @method array findByLibelleThemeAr(string $LIBELLE_THEME_AR) Return Theme objects filtered by the LIBELLE_THEME_AR column
 * @method array findByIdEntite(int $ID_ENTITE) Return Theme objects filtered by the ID_ENTITE column
 * @method array findByVisibleTiers(string $VISIBLE_TIERS) Return Theme objects filtered by the VISIBLE_TIERS column
 * @method array findByDateModification(string $DATE_MODIFICATION) Return Theme objects filtered by the DATE_MODIFICATION column
 * @method array findByTypeTheme(int $TYPE_THEME) Return Theme objects filtered by the TYPE_THEME column
 * @method array findByIdCircuitValidation(int $ID_CIRCUIT_VALIDATION) Return Theme objects filtered by the ID_CIRCUIT_VALIDATION column
 * @method array findByEntitesAutorisees(string $ENTITES_AUTORISEES) Return Theme objects filtered by the ENTITES_AUTORISEES column
 * @method array findByCalculEntitesAutorisees(string $CALCUL_ENTITES_AUTORISEES) Return Theme objects filtered by the CALCUL_ENTITES_AUTORISEES column
 * @method array findByTypeDemande(int $TYPE_DEMANDE) Return Theme objects filtered by the TYPE_DEMANDE column
 * @method array findByIdExterne(int $ID_EXTERNE) Return Theme objects filtered by the ID_EXTERNE column
 * @method array findByAideText(string $AIDE_TEXT) Return Theme objects filtered by the AIDE_TEXT column
 * @method array findByDelai(int $DELAI) Return Theme objects filtered by the DELAI column
 * @method array findByVisibleDemandeur(string $VISIBLE_DEMANDEUR) Return Theme objects filtered by the VISIBLE_DEMANDEUR column
 * @method array findByTypeDelai(string $TYPE_DELAI) Return Theme objects filtered by the TYPE_DELAI column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseThemeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseThemeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'Theme', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ThemeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ThemeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ThemeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ThemeQuery) {
            return $criteria;
        }
        $query = new ThemeQuery();
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
     * @return   Theme|Theme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ThemePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ThemePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Theme A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTheme($key, $con = null)
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
     * @return                 Theme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_THEME`, `LIBELLE_THEME_FR`, `LIBELLE_THEME_AR`, `ID_ENTITE`, `VISIBLE_TIERS`, `DATE_MODIFICATION`, `TYPE_THEME`, `ID_CIRCUIT_VALIDATION`, `ENTITES_AUTORISEES`, `CALCUL_ENTITES_AUTORISEES`, `TYPE_DEMANDE`, `ID_EXTERNE`, `AIDE_TEXT`, `DELAI`, `VISIBLE_DEMANDEUR`, `TYPE_DELAI` FROM `theme` WHERE `ID_THEME` = :p0';
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
            $obj = new Theme();
            $obj->hydrate($row);
            ThemePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Theme|Theme[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Theme[]|mixed the list of results, formatted by the current formatter
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
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ThemePeer::ID_THEME, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ThemePeer::ID_THEME, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_THEME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTheme(1234); // WHERE ID_THEME = 1234
     * $query->filterByIdTheme(array(12, 34)); // WHERE ID_THEME IN (12, 34)
     * $query->filterByIdTheme(array('min' => 12)); // WHERE ID_THEME >= 12
     * $query->filterByIdTheme(array('max' => 12)); // WHERE ID_THEME <= 12
     * </code>
     *
     * @param     mixed $idTheme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByIdTheme($idTheme = null, $comparison = null)
    {
        if (is_array($idTheme)) {
            $useMinMax = false;
            if (isset($idTheme['min'])) {
                $this->addUsingAlias(ThemePeer::ID_THEME, $idTheme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTheme['max'])) {
                $this->addUsingAlias(ThemePeer::ID_THEME, $idTheme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThemePeer::ID_THEME, $idTheme, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_THEME_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleThemeFr('fooValue');   // WHERE LIBELLE_THEME_FR = 'fooValue'
     * $query->filterByLibelleThemeFr('%fooValue%'); // WHERE LIBELLE_THEME_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleThemeFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByLibelleThemeFr($libelleThemeFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleThemeFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleThemeFr)) {
                $libelleThemeFr = str_replace('*', '%', $libelleThemeFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ThemePeer::LIBELLE_THEME_FR, $libelleThemeFr, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_THEME_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleThemeAr('fooValue');   // WHERE LIBELLE_THEME_AR = 'fooValue'
     * $query->filterByLibelleThemeAr('%fooValue%'); // WHERE LIBELLE_THEME_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleThemeAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByLibelleThemeAr($libelleThemeAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleThemeAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleThemeAr)) {
                $libelleThemeAr = str_replace('*', '%', $libelleThemeAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ThemePeer::LIBELLE_THEME_AR, $libelleThemeAr, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntite(1234); // WHERE ID_ENTITE = 1234
     * $query->filterByIdEntite(array(12, 34)); // WHERE ID_ENTITE IN (12, 34)
     * $query->filterByIdEntite(array('min' => 12)); // WHERE ID_ENTITE >= 12
     * $query->filterByIdEntite(array('max' => 12)); // WHERE ID_ENTITE <= 12
     * </code>
     *
     * @param     mixed $idEntite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(ThemePeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(ThemePeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThemePeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the VISIBLE_TIERS column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibleTiers('fooValue');   // WHERE VISIBLE_TIERS = 'fooValue'
     * $query->filterByVisibleTiers('%fooValue%'); // WHERE VISIBLE_TIERS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibleTiers The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByVisibleTiers($visibleTiers = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibleTiers)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibleTiers)) {
                $visibleTiers = str_replace('*', '%', $visibleTiers);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ThemePeer::VISIBLE_TIERS, $visibleTiers, $comparison);
    }

    /**
     * Filter the query on the DATE_MODIFICATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('2011-03-14'); // WHERE DATE_MODIFICATION = '2011-03-14'
     * $query->filterByDateModification('now'); // WHERE DATE_MODIFICATION = '2011-03-14'
     * $query->filterByDateModification(array('max' => 'yesterday')); // WHERE DATE_MODIFICATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModification The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (is_array($dateModification)) {
            $useMinMax = false;
            if (isset($dateModification['min'])) {
                $this->addUsingAlias(ThemePeer::DATE_MODIFICATION, $dateModification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModification['max'])) {
                $this->addUsingAlias(ThemePeer::DATE_MODIFICATION, $dateModification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThemePeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the TYPE_THEME column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeTheme(1234); // WHERE TYPE_THEME = 1234
     * $query->filterByTypeTheme(array(12, 34)); // WHERE TYPE_THEME IN (12, 34)
     * $query->filterByTypeTheme(array('min' => 12)); // WHERE TYPE_THEME >= 12
     * $query->filterByTypeTheme(array('max' => 12)); // WHERE TYPE_THEME <= 12
     * </code>
     *
     * @param     mixed $typeTheme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByTypeTheme($typeTheme = null, $comparison = null)
    {
        if (is_array($typeTheme)) {
            $useMinMax = false;
            if (isset($typeTheme['min'])) {
                $this->addUsingAlias(ThemePeer::TYPE_THEME, $typeTheme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeTheme['max'])) {
                $this->addUsingAlias(ThemePeer::TYPE_THEME, $typeTheme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThemePeer::TYPE_THEME, $typeTheme, $comparison);
    }

    /**
     * Filter the query on the ID_CIRCUIT_VALIDATION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCircuitValidation(1234); // WHERE ID_CIRCUIT_VALIDATION = 1234
     * $query->filterByIdCircuitValidation(array(12, 34)); // WHERE ID_CIRCUIT_VALIDATION IN (12, 34)
     * $query->filterByIdCircuitValidation(array('min' => 12)); // WHERE ID_CIRCUIT_VALIDATION >= 12
     * $query->filterByIdCircuitValidation(array('max' => 12)); // WHERE ID_CIRCUIT_VALIDATION <= 12
     * </code>
     *
     * @param     mixed $idCircuitValidation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByIdCircuitValidation($idCircuitValidation = null, $comparison = null)
    {
        if (is_array($idCircuitValidation)) {
            $useMinMax = false;
            if (isset($idCircuitValidation['min'])) {
                $this->addUsingAlias(ThemePeer::ID_CIRCUIT_VALIDATION, $idCircuitValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCircuitValidation['max'])) {
                $this->addUsingAlias(ThemePeer::ID_CIRCUIT_VALIDATION, $idCircuitValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThemePeer::ID_CIRCUIT_VALIDATION, $idCircuitValidation, $comparison);
    }

    /**
     * Filter the query on the ENTITES_AUTORISEES column
     *
     * Example usage:
     * <code>
     * $query->filterByEntitesAutorisees('fooValue');   // WHERE ENTITES_AUTORISEES = 'fooValue'
     * $query->filterByEntitesAutorisees('%fooValue%'); // WHERE ENTITES_AUTORISEES LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entitesAutorisees The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByEntitesAutorisees($entitesAutorisees = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entitesAutorisees)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $entitesAutorisees)) {
                $entitesAutorisees = str_replace('*', '%', $entitesAutorisees);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ThemePeer::ENTITES_AUTORISEES, $entitesAutorisees, $comparison);
    }

    /**
     * Filter the query on the CALCUL_ENTITES_AUTORISEES column
     *
     * Example usage:
     * <code>
     * $query->filterByCalculEntitesAutorisees('fooValue');   // WHERE CALCUL_ENTITES_AUTORISEES = 'fooValue'
     * $query->filterByCalculEntitesAutorisees('%fooValue%'); // WHERE CALCUL_ENTITES_AUTORISEES LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calculEntitesAutorisees The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByCalculEntitesAutorisees($calculEntitesAutorisees = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calculEntitesAutorisees)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calculEntitesAutorisees)) {
                $calculEntitesAutorisees = str_replace('*', '%', $calculEntitesAutorisees);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ThemePeer::CALCUL_ENTITES_AUTORISEES, $calculEntitesAutorisees, $comparison);
    }

    /**
     * Filter the query on the TYPE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDemande(1234); // WHERE TYPE_DEMANDE = 1234
     * $query->filterByTypeDemande(array(12, 34)); // WHERE TYPE_DEMANDE IN (12, 34)
     * $query->filterByTypeDemande(array('min' => 12)); // WHERE TYPE_DEMANDE >= 12
     * $query->filterByTypeDemande(array('max' => 12)); // WHERE TYPE_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $typeDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByTypeDemande($typeDemande = null, $comparison = null)
    {
        if (is_array($typeDemande)) {
            $useMinMax = false;
            if (isset($typeDemande['min'])) {
                $this->addUsingAlias(ThemePeer::TYPE_DEMANDE, $typeDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeDemande['max'])) {
                $this->addUsingAlias(ThemePeer::TYPE_DEMANDE, $typeDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThemePeer::TYPE_DEMANDE, $typeDemande, $comparison);
    }

    /**
     * Filter the query on the ID_EXTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdExterne(1234); // WHERE ID_EXTERNE = 1234
     * $query->filterByIdExterne(array(12, 34)); // WHERE ID_EXTERNE IN (12, 34)
     * $query->filterByIdExterne(array('min' => 12)); // WHERE ID_EXTERNE >= 12
     * $query->filterByIdExterne(array('max' => 12)); // WHERE ID_EXTERNE <= 12
     * </code>
     *
     * @param     mixed $idExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByIdExterne($idExterne = null, $comparison = null)
    {
        if (is_array($idExterne)) {
            $useMinMax = false;
            if (isset($idExterne['min'])) {
                $this->addUsingAlias(ThemePeer::ID_EXTERNE, $idExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idExterne['max'])) {
                $this->addUsingAlias(ThemePeer::ID_EXTERNE, $idExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThemePeer::ID_EXTERNE, $idExterne, $comparison);
    }

    /**
     * Filter the query on the AIDE_TEXT column
     *
     * Example usage:
     * <code>
     * $query->filterByAideText('fooValue');   // WHERE AIDE_TEXT = 'fooValue'
     * $query->filterByAideText('%fooValue%'); // WHERE AIDE_TEXT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aideText The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByAideText($aideText = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aideText)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aideText)) {
                $aideText = str_replace('*', '%', $aideText);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ThemePeer::AIDE_TEXT, $aideText, $comparison);
    }

    /**
     * Filter the query on the DELAI column
     *
     * Example usage:
     * <code>
     * $query->filterByDelai(1234); // WHERE DELAI = 1234
     * $query->filterByDelai(array(12, 34)); // WHERE DELAI IN (12, 34)
     * $query->filterByDelai(array('min' => 12)); // WHERE DELAI >= 12
     * $query->filterByDelai(array('max' => 12)); // WHERE DELAI <= 12
     * </code>
     *
     * @param     mixed $delai The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByDelai($delai = null, $comparison = null)
    {
        if (is_array($delai)) {
            $useMinMax = false;
            if (isset($delai['min'])) {
                $this->addUsingAlias(ThemePeer::DELAI, $delai['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delai['max'])) {
                $this->addUsingAlias(ThemePeer::DELAI, $delai['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ThemePeer::DELAI, $delai, $comparison);
    }

    /**
     * Filter the query on the VISIBLE_DEMANDEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibleDemandeur('fooValue');   // WHERE VISIBLE_DEMANDEUR = 'fooValue'
     * $query->filterByVisibleDemandeur('%fooValue%'); // WHERE VISIBLE_DEMANDEUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibleDemandeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByVisibleDemandeur($visibleDemandeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibleDemandeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibleDemandeur)) {
                $visibleDemandeur = str_replace('*', '%', $visibleDemandeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ThemePeer::VISIBLE_DEMANDEUR, $visibleDemandeur, $comparison);
    }

    /**
     * Filter the query on the TYPE_DELAI column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDelai('fooValue');   // WHERE TYPE_DELAI = 'fooValue'
     * $query->filterByTypeDelai('%fooValue%'); // WHERE TYPE_DELAI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDelai The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function filterByTypeDelai($typeDelai = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDelai)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDelai)) {
                $typeDelai = str_replace('*', '%', $typeDelai);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ThemePeer::TYPE_DELAI, $typeDelai, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Theme $theme Object to remove from the list of results
     *
     * @return ThemeQuery The current query, for fluid interface
     */
    public function prune($theme = null)
    {
        if ($theme) {
            $this->addUsingAlias(ThemePeer::ID_THEME, $theme->getIdTheme(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
